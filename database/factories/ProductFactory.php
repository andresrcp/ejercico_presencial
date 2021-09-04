<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //se crea un nuevo producto cada vez que se llama, utilizando los valores generados por faker.
            'name' => $this->faker->title,
            'description' => $this->faker->text(200),
            'price' => $this->faker->randomFloat(2,1000.00,80000.00),
            'image' => $this->faker->imageUrl,
            'companies_id' => Company::inRandomOrder()->value('id') ?: factory(Company::class) //asigna un valor aleatorio de los id en la tabla companies
        ];
    }
}
