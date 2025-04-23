<?php
namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'adm_id';
    protected $allowedFields = ['username', 'password', 'email', 'date'];
    protected $useAutoIncrement = true;
    
    protected $useTimestamps = false;
    protected $dateFormat = 'timestamp';
    
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
            log_message('info', 'Password hashed successfully');
        }
        return $data;
    }
}
