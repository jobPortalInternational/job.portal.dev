<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGeneralDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_general_descriptions', function (Blueprint $table) {
		$table->id();
		$table->unsignedBigInteger('user_id',);
		$table->text('general_description')->nullable();
		$table->text('skills')->nullable();
		$table->text('experience')->nullable();
		$table->text('courses')->nullable();
		$table->text('computer_skills')->nullable();
                $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('user_general_descriptions');
    }
}
