<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_types = [
	 ["type"=>"user"],
	 ["type"=>"recruiter"]
	];

	DB::table('user_type')->insert($user_types);
    }
}
