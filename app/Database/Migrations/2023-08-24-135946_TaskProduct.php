<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TaskProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'nama_taskproduct' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'desc_taskproduct' => [
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'id_produk' => [
                'type' => 'INT',
                'constraint' =>10,
                
            ],
            // ... add other columns
        ]);
          
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_product', 'product', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('task_product');
    }
    
    public function down()
    {
        $this->forge->dropTable('task_taskproduct');
    }
}
