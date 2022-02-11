<?php

namespace App\Controllers;

use Core\Controller;

class DemoController extends Controller
{
    public function index()
    {
        $url = 'https://vnexpress.net/hang-loat-website-lon-tren-the-gioi-sap-4291143.html';

        $html = $this->call($url);
        
        $title = $html->find('h1', 0)->innertext;

        $description = $html->find('p[class="description"]', 0)->innertext;

        foreach($html->find('meta[itemprop="url"]') as $element) {
            echo $element->content . '<br>';
        }

        $path = __DIR__ .'/../../public/uploads/tetst.jpg';

        $demo = $this->grab_image('https://i1-sohoa.vnecdn.net/2021/06/08/20210608-202830-9564-1623159081.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=Y47VvSV1xD5DGYjnO-JJuQ', $path);
       
    }

    protected function call($url = '')
    {
        $useraent = [
            'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2',
            'Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)',
            'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko',
            'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14',
            'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/7046A194A',
            'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0'
        ];


        $ch = curl_init();
        #curl_setopt($ch, CURLOPT_URL,$urlPro);
        #curl_setopt($ch, CURLOPT_PROXY, $proxy);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, ''.$useraent[array_rand($useraent)].'');
        curl_setopt($ch, CURLOPT_ENCODING , "gzip");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $return = curl_exec($ch);
        $encot = false;
        $charset = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        curl_close($ch);

        $html = str_get_html('"'.$return.'"');

        return $html;
    }

    protected function grab_image($url, $saveto){
        $ch = curl_init ($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
        $raw=curl_exec($ch);
        curl_close ($ch);
        if(file_exists($saveto)){
            unlink($saveto);
        }
        $fp = fopen($saveto,'x');
        fwrite($fp, $raw);
        fclose($fp);                                // closing file handle
    }
}