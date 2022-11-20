<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create("job_post", function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger("company_id");
		$table->unsignedBigInteger("job_type_id");
		$table->text("job_description");
		$table->decimal("salary",15,2);
		$table->string("job_location");
		$table->enum("is_active",["enabled","disabled"])->default("enabled");
		$table->timestamps();
		$table->foreign("company_id")
                ->references("id")
                ->on("companies_account")
                ->onUpdate("cascade")
                ->onDelete("cascade");

		$table->foreign("job_type_id")
                ->references("id")
                ->on("job_type")
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
    	Schema::dropIfExists("job_post");
    }
}
