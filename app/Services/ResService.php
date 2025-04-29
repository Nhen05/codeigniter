<?php
namespace App\Services;
use App\Models\ResModel;
use App\Models\ResCateModel;

class ResService extends BaseService{
    protected $RestaurantModel;
    protected $ResCateModel;

    public function __construct()
    {
        $this->RestaurantModel = new ResModel(); 
        $this->ResCateModel = new ResCateModel();        

    }
    public function getListRestaurant(){
       
        $idCategory = $this->RestaurantModel->select('c_id')->findAll();
        $idTableArray = array_column($idCategory, 'c_id'); 
        $resCategory = $this->ResCateModel->select('c_name')->whereIn('c_id', $idTableArray)->findAll(); // Sử dụng whereIn
        return [
            'resCategory' => $resCategory,
            'listRes' => $this->RestaurantModel->findAll()
        ];
    }
}