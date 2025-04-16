<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    
    {
        $data = [];
        $data = $this->loadLayout($data);
        return view('client/index',$data);
    }
    public function restaurants(): string{
        $data = [];
        $data = $this->loadLayout($data);
        return view('client/restaurants',$data);
    }
    public function dishes(): string{
        $data = [];
        $data = $this->loadLayout($data);
        return view('client/dishes',$data);
    }
    public function orderDetails(): string{
        $data = [];
        $data = $this->loadLayout($data);
        return view('client/order_details',$data);
    }
    public function scanqr(): string{
        $data = [];
        $data = $this->loadLayout($data);
        return view('client/scan_qr',$data);
    }
}
