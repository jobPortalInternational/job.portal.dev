<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("company_benefits", function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger("company_id");
		$table->string("benefit");

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
        Schema::dropIfExists("company_benefits");
    }
}
