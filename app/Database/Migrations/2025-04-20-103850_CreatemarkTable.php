<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatemarkTable extends Migration
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
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'collation'  => 'utf8mb4_general_ci',
            ],
            'remark' => [
                'type'      => 'MEDIUMTEXT',
                'collation' => 'utf8mb4_general_ci',
            ],
            // Bỏ remarkDate ở đây để thêm bằng raw SQL sau
        ]);

        $this->forge->addKey('id', true); // PRIMARY KEY
        $this->forge->createTable('remark');

        // Thêm trường remarkDate với CURRENT_TIMESTAMP bằng raw SQL
        $this->db->query("
            ALTER TABLE `remark` 
            ADD `remarkDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
        ");
    }

    public function down()
    {
        $this->forge->dropTable('remark');
    }
}
