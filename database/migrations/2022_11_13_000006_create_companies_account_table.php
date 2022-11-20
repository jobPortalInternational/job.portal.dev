<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	 Schema::create("companies_account", function (Blueprint $table) {
		$table->id();
		$table->string("email")->unique();
		$table->string("password");
		$table->string("company_name")->unique();
		$table->unsignedBigInteger("field_of_work_id");
		$table->datetime("establishment_date");
		$table->timestamps();

		$table->foreign("field_of_work_id")
		->references('id')
		->on('field_of_work')
		->onDelete('cascade')
		->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("companies_account");
    }
}
