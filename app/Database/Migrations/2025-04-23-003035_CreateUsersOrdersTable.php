<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'o_id' => [
                'type'           => 'INT',
                'constraint'     => 222,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'u_id' => [
                'type'       => 'INT',
                'constraint' => 222,
                'unsigned'   => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => false,
            ],
            'quantity' => [
                'type'       => 'INT',
                'constraint' => 222,
                'null'       => false,
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,0',
                'null'       => false,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => true,
            ],
            'date' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
            ],
            'customer_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'num_people' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => false,
            ],
            'mahoadon' => [
                'type'       => 'VARCHAR',
                'constraint' => 1000,
                'null'       => false,
            ],
            'duyetdonhang' => [
                'type'       => 'INT',
                'constraint' => 1,
                'default'    => 0,
            ],
        ]);

        $this->forge->addKey('o_id', true); // Primary key
        $this->forge->createTable('users_orders');
    }

    public function down()
    {
        $this->forge->dropTable('users_orders');
    }
}
