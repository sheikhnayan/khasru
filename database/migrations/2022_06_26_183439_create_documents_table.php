<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable();
            $table->string('institute_id')->nullable();
            $table->string('subject_id')->nullable();
            $table->string('price')->nullable();
            $table->string('title')->nullable();
            $table->string('course_code')->nullable();
            $table->string('year')->nullable();
            $table->string('language')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
