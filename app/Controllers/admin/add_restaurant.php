<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;

class add_restaurant extends BaseController
{
    public function index():string{
        $data = [];
        $data = $this -> giaodienAdmin($data);
        return view('admin/add_restaurant', $data);
    }
}
