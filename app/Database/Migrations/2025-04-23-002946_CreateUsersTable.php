<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'u_id' => [
                'type'           => 'INT',
                'constraint'     => 222,
                'unsigned'       => true,
                'auto_increment' => true, // Nếu không cần tự tăng, bạn có thể xoá dòng này
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'f_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'l_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'status' => [
                'type'       => 'INT',
                'constraint' => 222,
                'default'    => 1,
            ],
            'date' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
            ],
        ]);

        $this->forge->addKey('u_id', true); // Primary key
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
