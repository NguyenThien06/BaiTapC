<?php

namespace App\Controllers\Admin;

use App\Core\Auth;
use App\Models\Admin\Slider;
use Core\Session;
use Core\Helper;

class SliderController extends Auth
{
    protected $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Slider();
    }

    public function create()
    {
        return $this->loadView('admin/main', [
            'title' => 'Thêm Slider Mới',
            'template' => 'slider/add'
        ]);
    }

    protected function formRequest($isCreateTime = 1)
    {
        $data = [];
        $data['name']       = isset($_POST['name']) ? Helper::makeSafe($_POST['name']) : '';
        $data['file']       = isset($_POST['file']) ? Helper::makeSafe($_POST['file']) : '';

        if ($data['name'] == '' || $data['file'] == '') {
            Session::addFlash('error', 'Tên và File Ảnh không để trống');
            return false;
        }

        $data['url']            = isset($_POST['url']) ? Helper::makeSafe($_POST['url']) : '';
        $data['sort_by']        = isset($_POST['sort_by']) ? intval($_POST['sort_by']) : 0;
        $data['active']         = isset($_POST['active']) ? intval($_POST['active']) : 1;
        $data['updated_at']     = date("Y-m-d H:i:s");

        if ($isCreateTime == 1) {
            $data['created_at'] = date("Y-m-d H:i:s");
        }

        return $data;
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $data = $this->formRequest();
            if (!$data) return Helper::redirect('/admin/sliders/add');

            $result = $this->model->create($data);
            if ($result) {
                Session::addFlash('success', 'Tạo Slider mới thành công');
                return Helper::redirect('/admin/sliders/add');
            }

            Session::addFlash('error', 'Tạo Slider mới LỖI');
            return Helper::redirect('/admin/sliders/add');
        }

        Session::addFlash('error', 'Phương thức không hổ trợ');
        return Helper::redirect('/admin/sliders/add');
    }
}