<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'nama_project' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'desc_project' => [
                'type' => 'VARCHAR',
                'constraint' => '225'
            ],
            'tgl_project' => [
                'type' => 'datetime',
                
            ],
            // ... add other columns
        ]);
          
        $this->forge->addKey('id', true);
        $this->forge->createTable('project');
    }
    
    public function down()
    {
        $this->forge->dropTable('project');
    }
}
