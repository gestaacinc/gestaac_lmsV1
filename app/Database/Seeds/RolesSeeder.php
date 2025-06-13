<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name'=>'student','description'=>'Student role'],
            ['name'=>'instructor','description'=>'Instructor role'],
            ['name'=>'admin','description'=>'Administrator role'],
        ];
        $this->db->table('roles')->insertBatch($data);
    }
}
