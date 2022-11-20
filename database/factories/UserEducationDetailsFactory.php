<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserEducationDetails;
use App\Models\User;

class UserEducationDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = UserEducationDetails::class;

    public function definition()
    {
	$user_ids = User::pluck('id');

        return [
	    'user_id' => $this->faker->randomElement($user_ids),
            'certificate_degree_name' => "Test Certificate Degree Name",
	    'university' => 'Test University',
	    'specialty' => 'Test Specialty',
	    'starting_date' => \Carbon\Carbon::yesterday(),
	    'completion_date' => \Carbon\Carbon::now(),
	    'cgpa'=>rand(2,6),
	    'created_at' => \Carbon\Carbon::yesterday(),
	    'updated_at' => \Carbon\Carbon::now()
        ];
    }
}
