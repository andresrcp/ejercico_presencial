<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //se crea una nueva empresa cada vez que se llama, utilizando los valores generados por faker.
            'name' => $this->faker->company,
            'nit' => $this->faker->bothify('###-####')
        ];
    }
}
