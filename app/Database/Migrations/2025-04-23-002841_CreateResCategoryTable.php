<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResCategoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'c_id' => [
                'type'           => 'INT',
                'constraint'     => 222,
                'unsigned'       => true,
                'auto_increment' => true, // Nếu không cần tăng tự động thì xoá dòng này
            ],
            'c_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 222,
                'collation'  => 'utf8_unicode_ci',
            ],
            'date' => [
                'type'    => 'TIMESTAMP',
                'null'    => false,
            ],
        ]);

        $this->forge->addKey('c_id', true); // Primary key
        $this->forge->createTable('res_category');
    }

    public function down()
    {
        $this->forge->dropTable('res_category');
    }
}
