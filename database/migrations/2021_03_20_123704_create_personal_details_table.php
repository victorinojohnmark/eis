<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('middle_initial');
            $table->string('suffixname');
            $table->date('birth_date');
            $table->unsignedInteger('marital_status_id');
            $table->string('personal_email');
            $table->string('contact_no');
            $table->string('address');
            $table->string('emerg_person');
            $table->string('emerg_contact_no');
            $table->string('profile_image_filename')->nullable();
            $table->string('signature_image_filename')->nullable();
            $table->string('sss_no');
            $table->string('tin_no')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('pagibig')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
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
        Schema::dropIfExists('personal_details');
    }
}
