<?php
namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Services\AdminService;

class Login extends BaseController
{
    private $service;

    public function __construct()
    {
        $this->service = new AdminService();
    }

    /**
     * Display registration page
     */
    public function index(): string
    {
        return view('admin/index');  // Trả về trang đăng ký
    }

    /**
     * Handle admin registration
     */
    public function create()
    {
        // Get data from form and send to service for processing
        $result = $this->service->themAdmin($this->request);

        // Check the result
        if ($result['status'] === 'ERROR') {
            // If there's an error, go back to registration page and show error
            return redirect()
                ->back()
                ->withInput()
                ->with('MESSAGE_ERROR', $result['messages']);
        }

        // If registration is successful, redirect to login page
        session()->setFlashdata('MESSAGE_SUCCESS', 'Đăng ký thành công!');
        return redirect()->to('admin/login');
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Kiểm tra dữ liệu đầu vào
        if (empty($username) || empty($password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('login_error', 'Vui lòng nhập đầy đủ thông tin');
        }

        // Lấy thông tin admin từ database
        $admin = $this->service->getAdminById($username);
        
        if (!$admin) {
            return redirect()
                ->back()
                ->withInput()
                ->with('login_error', 'Tài khoản không tồn tại');
        }

        // Kiểm tra mật khẩu
        if (!password_verify($password, $admin['password'])) {
            return redirect()
                ->back()
                ->withInput()
                ->with('login_error', 'Mật khẩu không đúng');
        }

        // Lưu thông tin đăng nhập vào session
        session()->set('admin_id', $admin['adm_id']);
        session()->set('admin_username', $admin['username']);

        // Chuyển hướng đến trang dashboard
        return redirect()->to(base_url('admin/dashboard'));
    }
}
