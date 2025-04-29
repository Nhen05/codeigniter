<?php 
namespace App\Services;
use App\Models\DishesModel;
use App\Models\RemarkModel;
use App\Models\ResCateModel;
use App\Models\ResModel;
 class DasService extends BaseService
 {

    protected $dishesModel;
    protected $remarkModel;
    protected $resCateModel;
    protected $resModel;
    public function __construct(){

        $this->dishesModel = new DishesModel();
        $this->remarkModel = new RemarkModel();
        $this->resCateModel = new ResCateModel();
        $this->resModel = new ResModel();
    }
  public function getTotals (){
    $totalDishes = $this->dishesModel->countAllResults();
    $totalRemark = $this->remarkModel->countAllResults();       
    $totalResCate = $this->resCateModel->countAllResults();
    $totalRes = $this->resModel->countAllResults();
    return [
        'totalDishes' => $totalDishes,
        'totalRemark' => $totalRemark,
        'totalResCate' => $totalResCate,
        'totalRes' => $totalRes
    ];
  }
 }