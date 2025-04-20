<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateresCategoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'c_id' => [
                'type'           => 'INT',
                'constraint'     => 222,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'c_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'collation'  => 'utf8_unicode_ci',
            ],
            // Cột date sẽ được thêm bằng raw SQL
        ]);

        $this->forge->addKey('c_id', true); // PRIMARY KEY
        $this->forge->createTable('res_category');

        // Thêm cột `date` với DEFAULT CURRENT_TIMESTAMP và ON UPDATE CURRENT_TIMESTAMP
        $this->db->query("
            ALTER TABLE `res_category`
            ADD `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ");
    }

    public function down()
    {
        $this->forge->dropTable('res_category');
    }
}
