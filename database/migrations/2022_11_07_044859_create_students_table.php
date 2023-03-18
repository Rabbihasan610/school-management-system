<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('school_id')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('student_name_bn')->nullable();
            $table->string('birth_certificate_number')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('p_post_code')->nullable();
            $table->string('p_district')->nullable();
            $table->string('p_thana')->nullable();
            $table->string('persent_address')->nullable();
            $table->string('pre_post_code')->nullable();
            $table->string('pre_district')->nullable();
            $table->string('pre_thana')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('father_occuoation')->nullable();
            $table->string('father_mobile_no')->nullable();
            $table->string('father_email')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('mother_occopation')->nullable();
            $table->string('mother_mobile_no')->nullable();
            $table->string('mother_email')->nullable();
            $table->string('local_guardian_name')->nullable();
            $table->string('local_guardian_nid')->nullable();
            $table->string('local_guardian_relation')->nullable();
            $table->string('local_guardian_mobile_no')->nullable();
            $table->string('local_guardian_email')->nullable();
            $table->string('previous_institute_name')->nullable();
            $table->string('previous_class')->nullable();
            $table->string('previous_institute_address')->nullable();
            $table->string('previuous_result')->nullable();
            $table->string('student_phone_number')->nullable();
            $table->string('session')->nullable();
            $table->string('class')->nullable();
            $table->string('class_roll')->nullable();
            $table->string('section')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->integer('role_id');

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
