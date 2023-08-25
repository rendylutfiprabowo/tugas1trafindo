<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
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
            // Add more user data here
        ];

        // Using Query Builder to insert data
        $this->db->table('user')->insertBatch($data);
    }
}
