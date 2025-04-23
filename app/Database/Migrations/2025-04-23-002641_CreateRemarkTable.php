<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRemarkTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'frm_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'collation'  => 'utf8mb4_general_ci',
            ],
            'remark' => [
                'type'      => 'MEDIUMTEXT',
                'null'      => false,
                'collation'=> 'utf8mb4_general_ci',
            ],
            'remarkDate' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('remark');
    }

    public function down()
    {
        $this->forge->dropTable('remark');
    }
}
