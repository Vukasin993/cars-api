<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->text('10'),
            'model' => $this->faker->text('10'),
            'year' => $this->faker->numberBetween(1990,2020),   
            'maxSpeed' => $this->faker->numberBetween(180,300), 
            'isAutomatic' => $this->faker->numberBetween(0,1),
            'engine' => $this->faker->word(),
            'numberOfDoors'=> $this->faker->numberBetween(3,8),
        ];
    }
}
