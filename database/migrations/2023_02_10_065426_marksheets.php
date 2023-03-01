<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marksheets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stud_id');
            $table->string('exam_date');
            $table->string('Soodam');
            $table->string('BS');
            $table->string('Laravel');
            $table->string('PE');
            $table->string('Java');
            $table->string('total');
            $table->string('percent');
            $table->string('grade');
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
        //
    }
};
