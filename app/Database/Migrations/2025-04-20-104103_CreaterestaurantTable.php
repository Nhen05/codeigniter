<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaterestaurantTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'rs_id' => [
                'type'           => 'INT',
                'constraint'     => 222,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'c_id' => [
                'type'       => 'INT',
                'constraint' => 222,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'collation'  => 'utf8mb4_general_ci',
            ],
            'o_hr' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'collation'  => 'utf8mb4_general_ci',
            ],
            'c_hr' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'collation'  => 'utf8mb4_general_ci',
            ],
            'o_days' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'collation'  => 'utf8mb4_general_ci',
            ],
            'address' => [
                'type'      => 'TEXT',
                'collation' => 'utf8_unicode_ci',
            ],
            'image' => [
                'type'      => 'TEXT',
                'collation' => 'utf8mb4_general_ci',
            ],
            'so_nguoi' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            // Cột `date` sẽ thêm bằng raw SQL
        ]);

        $this->forge->addKey('rs_id', true); // PRIMARY KEY
        $this->forge->createTable('restaurant');

        // Thêm cột `date` với CURRENT_TIMESTAMP ON UPDATE bằng raw SQL
        $this->db->query("
            ALTER TABLE `restaurant` 
            ADD `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ");
    }

    public function down()
    {
        $this->forge->dropTable('restaurant');
    }
}
