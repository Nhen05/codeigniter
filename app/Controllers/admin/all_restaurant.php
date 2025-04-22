<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;

class all_restaurant extends BaseController
{
    public function index():string{
        $data = [];
        $data = $this -> giaodienAdmin($data);
        return view('admin/all_restaurant', $data);
    }
}
