<?php
namespace App\Controllers\admin;
namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];
        $data = $this->giaodienAdmin($data);

        if (session()->has('user_login')) {
            $data['user'] = session()->get('user_login');
            return view('admin/resall', $data);
        } else {
            return redirect('admin/login');
        }
    }
}