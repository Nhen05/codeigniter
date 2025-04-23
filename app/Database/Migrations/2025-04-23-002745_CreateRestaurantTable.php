<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRestaurantTable extends Migration
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
                'unsigned'   => true,
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
                'null'      => false,
                'collation' => 'utf8_unicode_ci',
            ],
            'image' => [
                'type'      => 'TEXT',
                'null'      => false,
                'collation' => 'utf8mb4_general_ci',
            ],
            'date' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
            ],
            'so_nguoi' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('rs_id', true); // Primary key
        $this->forge->createTable('restaurant');
    }

    public function down()
    {
        $this->forge->dropTable('restaurant');
    }
}
