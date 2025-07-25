<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type'=>'INT','constraint'=>11,'unsigned'=>true,'auto_increment'=>true],
            'instructor_id' => ['type'=>'INT','constraint'=>11,'unsigned'=>true],
            'title'         => ['type'=>'VARCHAR','constraint'=>150],
            'description'   => ['type'=>'TEXT'],
            'tesda_code'    => ['type'=>'VARCHAR','constraint'=>50,'null'=>true],
            'created_at'    => ['type'=>'DATETIME','null'=>true],
            'updated_at'    => ['type'=>'DATETIME','null'=>true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('instructor_id','users','id','CASCADE','CASCADE');
        $this->forge->createTable('courses');
    }

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}
