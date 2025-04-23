<?php
namespace App\Services;

use App\Models\AdminModel;
use App\Services\BaseServices;
use Exception;

class AdminService extends BaseServices
{
    private $admins;

    public function __construct()
    {
        parent::__construct();
        $this->admins = new AdminModel();
    }

    /**
     * Get all admins
     */
    public function getAllAdmins()
    {
        return $this->admins->findAll();
    }

    /**
     * Get admin by username
     */
    public function getAdminById($username)
    {
        return $this->admins->where('username', $username)->first();
    }

    /**
     * Validate registration data
     */
    private function validationThemAdmin($requestData)
    {
        // Validation rules
        $rules = [
            'email' => 'required|valid_email|is_unique[admin.email]',
            'username' => 'required|max_length[222]|min_length[3]|is_unique[admin.username]',
            'password' => 'required|max_length[222]|min_length[8]',
            'repassword' => 'required|matches[password]',
        ];

        // Error messages
        $messages = [
            'email' => [
                'required' => 'Địa chỉ email không được để trống',
                'valid_email' => 'Email không đúng định dạng',
                'is_unique' => 'Email này đã được đăng ký'
            ],
            'username' => [
                'required' => 'Tên tài khoản không được để trống',
                'max_length' => 'Tên tài khoản tối đa {param} ký tự',
                'min_length' => 'Tên tài khoản ít nhất {param} ký tự',
                'is_unique' => 'Tên tài khoản đã tồn tại'
            ],
            'password' => [
                'required' => 'Mật khẩu không được để trống',
                'max_length' => 'Mật khẩu tối đa {param} ký tự',
                'min_length' => 'Mật khẩu ít nhất {param} ký tự',
            ],
            'repassword' => [
                'required' => 'Nhập lại mật khẩu không được để trống',
                'matches' => 'Mật khẩu nhập lại không khớp',
            ]
        ];

        $this->validation->setRules($rules, $messages);
        return $this->validation->withRequest($requestData)->run();
    }

    /**
     * Add new admin
     */
    public function themAdmin($requestData)
    {
        // Validate input data
        if (!$this->validationThemAdmin($requestData)) {
            log_message('error', 'Validation failed: ' . json_encode($this->validation->getErrors()));
            return [
                'status' => 'ERROR',
                'messages' => $this->validation->getErrors()
            ];
        }

        try {
            // Prepare data for saving
            $data = [
                'username' => $requestData->getPost('username'),
                'email' => $requestData->getPost('email'),
                'password' => $requestData->getPost('password'),
                'date' => date('Y-m-d H:i:s')
            ];

            log_message('info', 'Attempting to save admin data: ' . json_encode($data));

            // Try direct insert
            $db = \Config\Database::connect();
            $builder = $db->table('admin');
            
            try {
                $builder->insert($data);
                $insertID = $db->insertID();
                log_message('info', 'Admin created successfully with ID: ' . $insertID);
                
                return [
                    'status' => 'SUCCESS',
                    'messages' => ['Đăng ký thành công!']
                ];
            } catch (\Exception $e) {
                log_message('error', 'Database error: ' . $e->getMessage());
                return [
                    'status' => 'ERROR',
                    'messages' => ['Lỗi hệ thống: ' . $e->getMessage()]
                ];
            }

        } catch (Exception $e) {
            log_message('error', 'Exception in themAdmin: ' . $e->getMessage());
            return [
                'status' => 'ERROR',
                'messages' => ['Lỗi hệ thống: ' . $e->getMessage()]
            ];
        }
    }
}