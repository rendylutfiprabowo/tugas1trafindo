<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'nama_product' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'desc_product' => [
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' =>10,
                
            ],
            // ... add other columns
        ]);
          
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
        $this->forge->addForeignKey('id_user', 'user', 'id', 'CASCADE', 'CASCADE');
    }
    
    public function down()
    {
        $this->forge->dropTable('product');
    }
}
