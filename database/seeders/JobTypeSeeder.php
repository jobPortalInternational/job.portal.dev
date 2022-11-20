<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	$types = [
	  [
           "type" => "Permanent job"
          ],
          [
           "type" => "Temporary/seasonal work"
          ],
          [
           "type" => "Internship"
          ],
          [
           "type" => "Freelance"
          ],
          [
           "type" => "Full time"
          ],
          [
           "type" => "Part-time work"
          ],
          [
           "type" => "Flexible working hours"
          ],
          [
           "type" => "For students"
          ],
          [
           "type" => "For candidates with little or no experience"
          ]
	];

        DB::table("job_type")->insert($types);
    }
}
