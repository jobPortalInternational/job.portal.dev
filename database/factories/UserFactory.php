<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = User::class;

    public function definition()
    {
	$user_password = "user_password";
        $gender = $this->faker->randomElement(['male', 'famale']);


        return [
            'first_name' => $this->faker->userName,
            'second_name' => $this->faker->userName,
	    'last_name' => $this->faker->userName,
	    'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make($user_password),
	    'city' => $this->faker->city,
	    'contact_number' => $this->faker->numerify('###-###-####'),
	    'is_active' => 'enabled',
	    'type_id' => 1,
	    'gender' =>$gender,
	    'date_of_birth' => $this->faker->dateTime(),
            'remember_token' => Str::random(10),
	    'created_at' => \Carbon\Carbon::yesterday(),
	    'updated_at' => \Carbon\Carbon::now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
