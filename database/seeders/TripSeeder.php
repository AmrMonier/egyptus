<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\User;
use Database\Factories\TripFactory;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::factory(30)->create([
            'provider_id' => User::inRandomOrder()->first()->id
        ]);
    }
}
