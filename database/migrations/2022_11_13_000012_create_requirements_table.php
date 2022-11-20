<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("requirements", function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger("job_post_id");
		$table->string("requirement");
		$table->foreign("job_post_id")
                ->references("id")
                ->on("job_post")
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
    	Schema::dropIfExists("requirements");
    }
}
