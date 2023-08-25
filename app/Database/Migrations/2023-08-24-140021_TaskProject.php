<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TaskProject extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'id_taskproduct' => [
                'type' => 'INT',
                'constraint' =>10,
                
            ],
            'id_project' => [
                'type' => 'INT',
                'constraint' =>10,
                
            ],
            // ... add other columns
        ]);
          
        $this->forge->addKey('id', true);
        $this->forge->createTable('task_project');
    }
    
    public function down()
    {
        $this->forge->dropTable('task_project');
    }
}
