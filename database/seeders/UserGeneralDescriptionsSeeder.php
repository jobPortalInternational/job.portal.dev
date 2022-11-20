<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserGeneralDescriptions;

class UserGeneralDescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserGeneralDescriptions::factory()->count(10)->create();
    }
}
