<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
            'role_id'           => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'full_name'         => ['type'=>'VARCHAR','constraint'=>100],
            'email'             => ['type'=>'VARCHAR','constraint'=>150,'unique'=>true],
            'password_hash'     => ['type'=>'VARCHAR','constraint'=>255],
            'email_verified_at' => ['type'=>'DATETIME','null'=>true],
            'created_at'        => ['type'=>'DATETIME','null'=>true],
            'updated_at'        => ['type'=>'DATETIME','null'=>true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('role_id','roles','id','CASCADE','CASCADE');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
