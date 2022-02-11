<?php

namespace App\Controllers\Api;

use App\Core\AuthToken;
use App\Models\Admin\Menu;
use Core\Helper;


class MenuController extends AuthToken
{
    protected $model;

    public function __construct()
    {
        parent::__construct();    

        $this->model = new Menu();
    }

    public function index()
    {
        $menus = $this->model->get();

        return json([
            'error' => false,
            'menus' => $menus
        ]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data['name'] = isset($_POST['name']) ? Helper::makeSafe($_POST['name']) : '';
            if ($data['name'] == '') {
                return json([
                    'error' => true,
                    'message' => 'Vui lòng nhập tên Danh Mục'
                ]);
            }

            $data['parent_id']      = isset($_POST['parent_id']) ? (int) $_POST['parent_id'] : 0;
            $data['description']    = isset($_POST['description']) ? Helper::makeSafe($_POST['description']) : '';
            $data['order_by']       = isset($_POST['order_by']) ? (int) $_POST['order_by'] : 0;
            $data['active']         = isset($_POST['active']) ? (int) $_POST['active'] : 0;
            $data['created_at']     = Helper::timeStamp();
            $data['updated_at']     = Helper::timeStamp();

            $result = $this->model->insert($data);
            if ($result) {
                return json([
                    'error' => false,
                    'message' => 'Thêm danh mục thành công'
                ]);
            }

            return json([
                'error' => false,
                'message' => 'Thêm danh mục Lỗi'
            ]);
        }

        return json([
            'error' => true,
            'message' => 'Method not exit'
        ]);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

            $putdata = file_get_contents('php://input');

            $dataArray = explode("\n", $putdata);

            $request = [];

            foreach ($dataArray as $key => $line) {
                if (strpos($line, 'Content-Disposition') !== false) {
                    
                    $keyInput = explode('Content-Disposition: form-data; name="', $line);
                    $keyInput = substr(trim($keyInput[1]), 0, -1);
                    
                    $valueInput = trim($dataArray[$key + 2]);

                    $request[$keyInput] = $valueInput;
                }
            }

            dd($request);
        }
    }
}