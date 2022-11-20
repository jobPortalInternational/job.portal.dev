<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_education_details', function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger("user_id");
		$table->string("certificate_degree_name")->nullable();
		$table->string("university")->nullable();
		$table->string("specialty")->nullable();
		$table->datetime("starting_date")->nullable();
		$table->datetime("completion_date")->nullable();
		$table->decimal("cgpa",15,2)->nullable();
		$table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onUpdate("cascade")
                ->onDelete("cascade");
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
        Schema::dropIfExists("user_education_details");
    }
}
