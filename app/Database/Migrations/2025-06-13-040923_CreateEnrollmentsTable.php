<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEnrollmentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
            'class_id'    => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'student_id'  => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'enrolled_at' => ['type'=>'DATETIME','default'=>date('Y-m-d H:i:s')],
            'created_at'  => ['type'=>'DATETIME','null'=>true],
            'updated_at'  => ['type'=>'DATETIME','null'=>true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('class_id','classes','id','CASCADE','CASCADE');
        $this->forge->addForeignKey('student_id','users','id','CASCADE','CASCADE');
        $this->forge->createTable('enrollments');
    }

    public function down()
    {
        $this->forge->dropTable('enrollments');
    }
}
