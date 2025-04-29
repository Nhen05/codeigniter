<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateusersOrdersTable extends Migration
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
            ],
            'quantity' => [
                'type'       => 'INT',
                'constraint' => 222,
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,0',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'null'       => true,
            ],
            'date' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'on_update' => 'CURRENT_TIMESTAMP',
            ],
            'customer_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'num_people' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'mahoadon' => [
                'type'       => 'VARCHAR',
                'constraint' => 1000,
            ],
            'duyetdonhang' => [
                'type'       => 'INT',
                'constraint' => 1,
                'default'    => 0,
            ],
        ]);
        $this->forge->addKey('o_id', true);
        $this->forge->createTable('users_orders');
    }

    public function down()
    {
        $this->forge->dropTable('users_orders');
    }
}
