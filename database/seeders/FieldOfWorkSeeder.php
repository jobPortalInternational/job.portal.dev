<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldOfWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
	$fields = [
	 [
           "name" => "Agriculture and natural resources"
         ],
         [
           "name" => "Architecture and Construction"
         ],
         [
           "name" => "Business management"
         ],
         [
           "name" => "Administration"
	 ],
	 [
           "name" => "Financial services"
         ],
         [
           "name" => "Education"
         ],
         [
           "name" => "Arts"
         ],
         [
           "name" => "Marketing and communication careers"
         ],
         [
           "name" => "Healthcare"
         ],
         [
           "name" => "Information technology"
         ],
         [
           "name" => "Science and engineering"
         ],
         [
           "name" => "Hairdressing and beauty"
         ],
         [
           "name" => "Heritage, culture and libraries"
         ],
         [
           "name" => "Hospitality, catering and tourism"
         ],
         [
           "name" => "Manufacturing"
         ],
         [
           "name" => "Social sciences and religion"
         ],
         [
           "name" => "Sport and leisure"
         ],
         [
           "name" => "Transport, distribution and logistics"
         ]
       ];
        DB::table("field_of_work")->insert($fields);
    }
}
