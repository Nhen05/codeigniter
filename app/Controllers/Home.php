<?php

namespace App\Controllers;

class Home extends BaseController
{
    //client
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
    // admin
    public function auth():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/index',$data);
    }
    public function das():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/dashboard',$data);
    }
    public function resList():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/all_restaurant',$data);
    }
    public function addCategory():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/add_category',$data);
    }
    public function addRes():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/add_restaurant',$data);
    }
    public function menuList():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/all_menu',$data);
    }
    public function addMenu():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/add_menu',$data);
    }
    public function oderList():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/all_orders',$data);
    }
    public function reports():string{
        $data = [];
        $data = $this->loadLayoutAdmin($data);
        return view('admin/reports',$data);
    }
}
