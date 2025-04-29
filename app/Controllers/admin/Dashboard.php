<?php
namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Services\DasService;


class Dashboard extends BaseController
{ 
    protected $dasServices;
    public function __construct()
    {
        $this->dasServices = new DasService();
    }
    public function index()
    {
        $data = [];
        $data = $this->giaodienAdmin($data); 

        if (session()->has('user_login')) {
            $data['user'] = session()->get('user_login');
            $totals = $this->dasServices->getTotals();
            $data['totals'] = $totals;
            return view('admin/dashboard', $data);
            
        } else {
            return redirect()->to(base_url('admin/login')); 
        }
    }
    
}