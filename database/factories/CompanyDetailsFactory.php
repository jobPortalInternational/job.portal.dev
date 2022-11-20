<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CompanyDetails;
use App\Models\CompanyAccount;

class CompanyDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = CompanyDetails::class;

    public function definition()
    {
        return [
            'company_id' =>
	    'company_description' =>
            'working_enviroment' =>
	    'employees_in_bulgaria' =>
	    'employees_total' =>
	    'created_at' => \Carbon\Carbon::yesterday(),
	    'updated_at' => \Carbon\Carbon::now()
        ];
    }
}
