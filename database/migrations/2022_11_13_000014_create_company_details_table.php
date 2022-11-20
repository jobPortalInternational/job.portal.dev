<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('company_details', function (Blueprint $table) {
        	$table->id();
		$table->unsignedBigInteger("company_id");
		$table->text("company_description")->nullable();
		$table->text("working_enviroment")->nullable();
		$table->integer("employees_in_bulgaria")->nullable();
		$table->integer("employees_total")->nullable();
		$table->timestamps();
		$table->foreign("company_id")
		->references("id")
		->on("companies_account")
		->onDelete("cascade")
		->onUpdate("cascade");
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists("company_details");
    }
}
