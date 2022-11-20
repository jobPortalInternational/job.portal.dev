<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create("education_images", function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger("education_id");
		$table->string("path");
		$table->string("name");
		$table->foreign("education_id")
                ->references("id")
                ->on("user_education_details")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("education_images");
    }
}
