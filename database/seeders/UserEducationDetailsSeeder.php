<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserEducationDetails;

class UserEducationDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	UserEducationDetails::factory()->count(10)->create();
    }
}
