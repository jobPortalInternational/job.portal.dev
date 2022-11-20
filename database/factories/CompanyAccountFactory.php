<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FieldOfWork;
use Illuminate\Support\Facades\Hash;

class CompanyAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $company_password = "company_password";

	$fields_of_work = FieldOfWork::pluck('id');

	$random_fields = $this->faker->randomElement($fields_of_work);

        return [
            'email' => $this->faker->unique()->safeEmail(),
	    'password' => Hash::make($company_password),
            'company_name' => $this->faker->userName,
	    'field_of_work_id' => $random_fields,
	    'establishment_date' => \Carbon\Carbon::today()->subDays(rand(0, 365)),
	    'created_at' => \Carbon\Carbon::yesterday(),
	    'updated_at' => \Carbon\Carbon::now()
        ];

    }
}
