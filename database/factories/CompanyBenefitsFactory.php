<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CompanyBenefits;

class CompanyBenefitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = User::class;

    public function definition()
    {
        return [
            'id' =>
	    'company_id' =>
            'benefit' =>
        ];
    }
}
