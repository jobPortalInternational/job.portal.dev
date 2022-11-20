<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create("company_images", function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger("company_id");
		$table->string("path");
		$table->string("name");
		$table->foreign("company_id")
                ->references("id")
                ->on("companies_account")
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
    	Schema::dropIfExists("company_images");
    }
}
