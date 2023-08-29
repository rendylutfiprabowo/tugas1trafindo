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
                'constraint' => 10,

            ],
            'id_project' => [
                'type' => 'INT',
                'constraint' => 10,

            ],
            'completed' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'default' => 'NOT COMPLETED',
            ],
            // ... add other columns
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_taskproduct', 'task_product', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_project', 'project', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('task_project');
    }

    public function down()
    {
        $this->forge->dropTable('task_project');
    }
}
