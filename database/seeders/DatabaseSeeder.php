<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
		JobTypeSeeder::class,
		FieldOfWorkSeeder::class,
		UserTypeSeeder::class,
		UserSeeder::class,
		CompanyAccountSeeder::class,
		UserGeneralDescriptionsSeeder::class,
		UserEducationDetailsSeeder::class
	]);
    }
}
