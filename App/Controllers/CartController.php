<?php

namespace App\Controllers;

use App\Helpers\Helper;
use Core\Controller;
use Core\Helper as CoreHelper;
use Core\Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Customer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class CartController extends Controller
{
    protected $productModel;
    protected $cartModel;
    protected $customerModel;

    public function __construct()
    {
        $this->productModel = new Product();
        $this->cartModel = new Cart();
        $this->customerModel = new Customer();
    }

    public function add()
    { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_id = isset($_POST['product_id']) ? (int) $_POST['product_id'] : 0;
            $qty = isset($_POST['num_product']) ? (int) $_POST['num_product'] : 1;

            #Kiểm tra Product ID
            if ($product_id <= 0) {
                Session::addFlash('error', 'Sản Phẩm không tồn tại');
                return CoreHelper::redirect($_SERVER['HTTP_REFERER']);
            }

            #Lấy thông tin đơn hàng
            $carts = isset($_SESSION['carts']) ? $_SESSION['carts'] : NULL;
            if (is_null($carts)) { #Chưa có sản phẩm nào trong giỏ hàng
                $_SESSION['carts'][$product_id] = $qty;
                return CoreHelper::redirect('/carts');
            }
            
            #Sản phẩm đã có trong giỏ hàng và chúng ta sẽ cập nhật số lượng mới
            if (isset($_SESSION['carts'][$product_id])) {
                $_SESSION['carts'][$product_id] = (int) $_SESSION['carts'][$product_id] + $qty;
                return CoreHelper::redirect('/carts');
            }
            
            #Sản phẩm mới
            $_SESSION['carts'][$product_id] = $qty;

            return CoreHelper::redirect('/carts');
        }

        return CoreHelper::redirect($_SERVER['HTTP_REFERER']);
    }

    public function index()
    {
        $carts = isset($_SESSION['carts']) ? $_SESSION['carts'] : NULL;
        if (is_null($carts)) {

            return $this->loadView('main', [
                'title' => 'Giỏ hàng trống',
                'template' => 'carts/error'
            ]);
        }

        $products = $this->getProductCart($carts);

        return $this->loadView('main', [
            'title' => 'Giỏ Hàng',
            'template' => 'carts/list',
            'products'  => $products
        ]);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $carts = isset($_SESSION['carts']) ? $_SESSION['carts'] : NULL;
            if (is_null($carts)) {
                return CoreHelper::redirect('/');
            }
        
            $cartsProduct = isset($_POST['num_product']) ? $_POST['num_product'] : [];
            foreach($cartsProduct as $key => $value) {
                $_SESSION['carts'][$key] = (int) $value;
            }

            return CoreHelper::redirect('/carts');
        }

        return CoreHelper::redirect('/');
    }

    public function remove($id = 0)
    {
        unset($_SESSION['carts'][$id]);
        
        return CoreHelper::redirect('/carts');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            #Kiểm tra có tồn tại đơn hàng hay không
            $carts = isset($_SESSION['carts']) ? $_SESSION['carts'] : NULL;
            if (is_null($carts)) {
                Session::addFlash('error', 'Không tồn tại Sản phẩm trong giỏ hàng');
                return CoreHelper::redirect('/carts');
            }


            $data['name'] = isset($_POST['name']) ? \Core\Helper::makeSafe($_POST['name']) : '';
            $data['phone'] = isset($_POST['phone']) ? \Core\Helper::makeSafe($_POST['phone']) : '';

            if ($data['name'] == '' || $data['phone'] == '') {
                Session::addFlash('error', 'Tên và Số điện thoại không để trống');
                return CoreHelper::redirect('/carts');
            }

            $data['address'] = isset($_POST['address']) ? \Core\Helper::makeSafe($_POST['address']) : '';
            $data['email'] = isset($_POST['email']) ? \Core\Helper::makeSafe($_POST['email']) : '';
            $data['content'] = isset($_POST['content']) ? \Core\Helper::makeSafe($_POST['content']) : '';
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['is_view'] = 0;
            $data['code'] = \App\Helpers\Helper::randomStringGenerator();

            #insert Customer
            $customer_id = $this->customerModel->insert($data);
            
            #Xử lý Đơn hàng
            if ((int) $customer_id > 0) {
                $restult = $this->addCart($carts, $customer_id);

                if ($restult) {
                    Session::addFlash('success', 'Đặt hàng thành công');

                    $this->sendMail();

                    unset($_SESSION['carts']);
                    return CoreHelper::redirect('/carts');
                }
            }

            Session::addFlash('error', 'Đặt hàng Lỗi vui lòng chờ trong giây lát');
            return CoreHelper::redirect('/carts');
        }

        #return CoreHelper::redirect('/carts');
    }

    protected function getProductCart($carts)
    {
        #lấy ID sản phẩm từ giỏ hàng
        $productsId = array_keys($carts);
        $idProductString = implode(',', $productsId);

        return $this->productModel->getByCart($idProductString);
    }

    protected function addCart($carts, $customer_id = 1)
    {   
        $products = $this->getProductCart($carts);
        
        return $this->cartModel->insertCart($products, $customer_id, $carts);
    }

    protected function sendMail()
    {
        #include __DIR__.'/../Libs/PHPMailer/Mail.php';

        #return sendMail();
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'phanhongvan1992@gmail.com';                     //SMTP username
            $mail->Password   = 'nimllqgdpjzarnce';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('phanhongvan1992@gmail.com', 'Mailer');
            $mail->addAddress('phanhongvan1992@gmail.com', 'Joe User');     //Add a recipient
           # $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('phanhongvan1992@gmail.com', 'Information');
            #$mail->addCC('cc@example.com');
           # $mail->addBCC('bcc@example.com');

            //Attachments
            #$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    }
}