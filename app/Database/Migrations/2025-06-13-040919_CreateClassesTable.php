<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClassesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
            'course_id'   => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'class_code'  => ['type'=>'VARCHAR','constraint'=>10,'unique'=>true],
            'expires_at'  => ['type'=>'DATETIME','null'=>true],
            'seat_limit'  => ['type'=>'INT','constraint'=>11,'null'=>true],
            'created_at'  => ['type'=>'DATETIME','null'=>true],
            'updated_at'  => ['type'=>'DATETIME','null'=>true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('course_id','courses','id','CASCADE','CASCADE');
        $this->forge->createTable('classes');
    }

    public function down()
    {
        $this->forge->dropTable('classes');
    }
}
