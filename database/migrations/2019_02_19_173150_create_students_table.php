<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('id_student',10)-> nullable(false);
            $table->string('name',20)-> nullable(false);
            $table->string('lastname',20)-> nullable(false);
            $table->integer('age')->unsigned();
            $table->string('phone',10)-> nullable(false);
            $table->string('address',50)-> nullable(false);
            $table->date('birthdate')-> nullable(false);
            $table->primary('id_student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
