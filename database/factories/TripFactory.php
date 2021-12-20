<?php

namespace Database\Factories;

use DateInterval;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        $start_date = $this->faker->dateTimeBetween('+5 days','+1 years');
        $end_date = $start_date->add(new DateInterval(sprintf('P%dD', rand(2, 15))));
        $seats = rand(20,100);
        return [
            'name' => $this->faker->sentence(),
            'details' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(200,5000),
            'start_date' => $start_date,
            'end_date' => $end_date, 
            'seats' => $seats,
            'available_seats' => $seats,
            'program' => $this->faker->paragraph()
        ];
    }
}
