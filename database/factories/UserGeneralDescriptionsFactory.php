<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\UserGeneralDescriptions;

class UserGeneralDescriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = UserGeneralDescriptions::class;

    public function definition()
    {
        $user_ids = User::pluck('id');

        return [
            'user_id' => $this->faker->randomElement($user_ids),
            'general_description' => $this->faker->text(),
	    'skills' => $this->faker->text(),
	    'experience' => $this->faker->text(),
	    'courses' => $this->faker->text(),
	    'computer_skills' => $this->faker->text(),
	    'created_at'=>\Carbon\Carbon::now(),
	    'updated_at' => \Carbon\Carbon::now()
        ];
    }
}
