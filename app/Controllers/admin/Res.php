<?php
namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Services\ResService;



class Res extends BaseController
{   protected $restaurantList;
   
    public function __construct()
    {
        $this->restaurantList = new ResService();
        

    }
    
    public function index()
    {
        $data = [];
        $data = $this->giaodienAdmin($data);

        if (session()->has('user_login')) {
            $data['user'] = session()->get('user_login');
            $data['resList'] = $this->restaurantList->getListRestaurant();
            
            return view('admin/restaurant', $data);
        } else {
            return redirect('admin/login');
        }
    }
}