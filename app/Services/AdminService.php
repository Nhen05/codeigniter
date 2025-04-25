<?php

namespace App\Services;
use App\Models\AdminModel;//Gọi đến file AdminModel
use Exception;
class AdminService extends BaseService
{
    private $admins; //Biến cục bộ
    function __construct(){
        parent::__construct();
        $this -> admins = new AdminModel();//Khởi tạo đối tượng và gán vào admins
        $this -> admins -> protect(false); //Bảo vệ bảng
        ///admins => CONNECT tới bảng admin
    }
    //Hàm lấy tất cả dữ liệu trong bảng Admin
    public function layTatCaDataAdmin(){
        return $this->admins->findAll();
    }
    public function layDataAdminTheoUsername($username){
        return $this->admins->where('username', $username) ->first();
    }

    public function themAdmin($requestData){
        $validate = $this->validationThemAdmin($requestData);
        if($validate->getErrors()){
            
            return [
                'status'=> 'ERROR',
                'messageCode'=>'MESSAGE_ERROR',
                'messages'=> $validate->getErrors()
            ];
        }else{
            try {
                $dataSave = $requestData->getPost();
                unset($dataSave['repassword']);
                $dataSave['password'] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
                $this->admins->save($dataSave);
                return [
                    'status'=> 'SUCCESS',
                    'messageCode'=>'MESSAGE_SUCCESS',
                    'messages'=> ['MESSAGE_SUCCESS'=>'Đăng ký thành công']
                ];
            } catch (Exception $e) {
                return [
                    'status'=> 'ERROR',
                    'messageCode'=>'MESSAGE_ERROR',
                    'messages'=> ['MESSAGE_SUCCESS'=>$e->getMessage()]
                ];
            }            
        }
    }
    
    private function validationThemAdmin($requestData){
        //1 mảng trong php
        //$rule = []
        $rule = [
            'email'=>'required|valid_email',
            'username'=>'required|max_length[30]|min_length[3]',
            'password'=>'required|max_length[255]|min_length[8]',
            'repassword'=>'required|matches[password]',
        ];
        $message = [
            'email'=>[
                'required'=>'Địa chỉ email không được để trống',
                'valid_email'=>'Email nhập sai định dạng'
            ],
            'username'=>[
                'required'=>'Tên tài khoản không được để trống',
                'max_length'=>'Tên tài khoản tối đa {param} ký tự',
                'min_length'=>'Tên tài khoản ít nhất {param} ký tự'
            ],
            'password'=>[
                'required'=>'Mật khẩu không được để trống',
                'max_length'=>'Mật khẩu tối đa {param} ký tự',
                'min_length'=>'Mật khẩu ít nhất {param} ký tự'
            ],
            'repassword'=>[
                'required'=>'Nhập lại mật khẩu không được để trống',
                'matches'=>'Mật khẩu nhập lại không khớp',
            ]
        ];
        $this->validation->setRules($rule,$message);
        //validation = [[rule],[message]]
        $this->validation->withRequest($requestData)->run();
        return $this->validation;
    }
}
