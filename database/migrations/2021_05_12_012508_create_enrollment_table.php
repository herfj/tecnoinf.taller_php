<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->text('state_description');
            $table->text('letter_of_intent');
            $table->float('course_grade');
            $table->float('course_grade_description');
            $table->timestamps();
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('edition_id')->constrained('editions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
