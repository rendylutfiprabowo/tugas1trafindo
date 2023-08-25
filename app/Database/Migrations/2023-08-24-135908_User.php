<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'auto_increment' => true
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'email_user' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'password_user' => [
                'type' => 'VARCHAR',
                'constraint' => 225,

            ],
            'role_user' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            // ... add other columns
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user', 'role_user');
    }
}
