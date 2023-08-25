<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'nama_notes' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'desc_notes' => [
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'id_task' => [
                'type' => 'INT',
                'constraint' =>10,
                
            ],
            // ... add other columns
        ]);
          
        $this->forge->addKey('id', true);
        $this->forge->createTable('notes');
    }
    
    public function down()
    {
        $this->forge->dropTable('notes');
    }
}
