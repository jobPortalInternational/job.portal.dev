<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
		$table->id();
		$table->string('first_name');
		$table->string('second_name');
		$table->string('last_name');
		$table->string('email')->unique();
		$table->string('password');
		$table->string('city');
		$table->string('contact_number',100);
		$table->enum('is_active',['enabled','disabled']);
		$table->unsignedBigInteger('type_id',);
		$table->enum('gender',['male','famale']);
		$table->datetime('date_of_birth');
		$table->rememberToken();
                $table->timestamps();
                $table->foreign('type_id')
		->references('id')
		->on('user_type')
		->onUpdate('cascade')
		->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
