<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'nama_user' => 'Admin',
                'email_user'    => 'admin@mail.com',
                'password_user' => password_hash('12345678', PASSWORD_DEFAULT), // Hashing password
                'role_user' => '1'
            ],
            [
                'nama_user' => 'User',
                'email_user'    => 'user@mail.com',
                'password_user' => password_hash('12345678', PASSWORD_DEFAULT), // Hashing password
                'role_user' => '2'
            ]
        ];
        $products = [
            [
                'nama_product' => 'TRAFO XXL',
                'desc_product'    => 'Trafo XXL merupakan Trafo XXL merupakanTrafo XXL merupakanTrafo XXL merupakanTrafo XXL merupakan',
                'id_user' => '1'
            ],
            [
                'nama_product' => 'TRAFO S',
                'desc_product'    => 'Trafo S merupakan Trafo S merupakanTrafo S merupakanTrafo S merupakanTrafo S merupakan',
                'id_user' => '1'
            ],
        ];
        $projects = [
            [
                'nama_project' => 'TRAFO XXL',
                'desc_project'    => 'Trafo XXL merupakan Trafo XXL merupakanTrafo XXL merupakanTrafo XXL merupakanTrafo XXL merupakan',
                'tgl_project'=>date('Y-m-d H:i:s',strtotime('2024-08-15 15:30:00'))
            ],
            [
                'nama_project' => 'TRAFO S',
                'desc_project'    => 'Trafo S merupakan Trafo S merupakanTrafo S merupakanTrafo S merupakanTrafo S merupakan',
                'tgl_project'=>date('Y-m-d H:i:s',strtotime('2024-08-15 15:30:00'))
            ],
        ];
        $task_products = [
            [
                'nama_taskproduct' => 'Bikin',
                'desc_taskproduct' => 'Bikin Sebelum Rakit',
                'id_product' => '1',
            ],
            [
                'nama_taskproduct' => 'Rakit',
                'desc_taskproduct' => 'Rakit Setelah Bikin',
                'id_product' => '1',
            ],
        ];
        $task_projects = [
            [
                'id_taskproduct'=>'1',
                'id_project' => '1',
            ],
            [
                'id_taskproduct'=>'2',
                'id_project' => '1',

            ],
        ];
        $notes = [
            [
                'nama_notes' => 'Liat',
                'desc_notes' => 'Liat-liat dulu bru kerjain',
                'id_task' => '1',
            ],
        ];
            // Add more user data here


        // Using Query Builder to insert data
        $this->db->table('user')->insertBatch($users);
        $this->db->table('product')->insertBatch($products);
        $this->db->table('project')->insertBatch($projects);
        $this->db->table('task_product')->insertBatch($task_products);
        $this->db->table('task_project')->insertBatch($task_projects);
        $this->db->table('notes')->insertBatch($notes);
    }
}
