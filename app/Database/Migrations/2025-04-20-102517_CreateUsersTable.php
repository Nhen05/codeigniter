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
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
            ],
            'f_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
            ],
            'l_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type'       => 'INT',
                'constraint' => 222,
                'default'    => 1,
            ],
            // Bỏ cột date ở đây, sẽ thêm sau bằng raw SQL
        ]);

        $this->forge->addKey('u_id', true);
        $this->forge->createTable('users');

        // Thêm cột `date` bằng raw SQL
        $this->db->query("
            ALTER TABLE `users` 
            ADD `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ");
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
