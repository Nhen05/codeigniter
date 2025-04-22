<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;

class update_restaurant extends BaseController
{
    public function index():string{
        $data = [];
        $data = $this -> giaodienAdmin($data);
        return view('admin/update_restaurant', $data);
    }
}
