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
}
