<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonchuyennganhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monchuyennganhs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code');
            $table->string('course_name');
            $table->integer('tinchi');
            $table->string('department_code');
            $table->string('term')->default("Môn chuyên ngành");
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
        Schema::dropIfExists('monchuyennganhs');
    }
}
