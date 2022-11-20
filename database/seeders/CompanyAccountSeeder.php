<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyAccount;

class CompanyAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyAccount::factory()->count(10)->create();
    }
}
