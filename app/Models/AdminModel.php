<?php
<<<<<<< HEAD
=======

>>>>>>> upstream/main
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
<<<<<<< HEAD
    // Tên bảng trong database để thao tác với dữ liệu admin
    protected $table = 'admin';
    
    // Khóa chính của bảng admin
    protected $primaryKey = 'adm_id';
    
    // Các trường được phép cập nhật trong bảng admin
    // Bao gồm: username, password, email và date
    protected $allowedFields = ['username', 'password', 'email', 'date'];
    
    // Sử dụng tự động tăng cho khóa chính
    protected $useAutoIncrement = true;
    
    // Không sử dụng timestamps (created_at, updated_at)
    protected $useTimestamps = false;
    
    // Định dạng ngày tháng sử dụng timestamp
    protected $dateFormat = 'timestamp';
    
    // Hàm callback được gọi trước khi thêm dữ liệu mới
    // Mục đích: mã hóa mật khẩu trước khi lưu vào database
    protected $beforeInsert = ['hashPassword'];

    // Hàm mã hóa mật khẩu sử dụng thuật toán BCRYPT
    // Được gọi tự động trước khi thêm dữ liệu mới
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
            log_message('info', 'Password hashed successfully');
        }
        return $data;
    }
}
=======
    protected $table = 'admin';//'admin'=>tên bảng trong CSDL    
}
>>>>>>> upstream/main
