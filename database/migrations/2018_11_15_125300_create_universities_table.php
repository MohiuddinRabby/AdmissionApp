<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('a_gpa');
            $table->double('b_gpa');
            $table->double('c_gpa');
            $table->double('d_gpa');
            $table->string('admission_date');
            $table->string('admission_time');
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
        Schema::dropIfExists('universities');
    }
}
