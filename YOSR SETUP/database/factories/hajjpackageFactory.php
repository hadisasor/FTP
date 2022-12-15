<?php

namespace Database\Factories;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\level;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hajjpackage>
 */
class hajjpackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        $levels=['Deluxe','Golden','Silver','Saver'];
            

        
        return [
            
            'PackageName' => $this->faker->randomElement(['Deluxe','Golden','Silver','Saver']),
            'groupLeader'=> $this->faker->name(),
            'numberOfPilgrims' => $this->faker->randomNumber(),
            'groupNumber' => $this->faker->randomNumber(2),
            'Stayingdays' => $this->faker->randomNumber(2),

            'makkaHotel' => $this->faker->company(),
            'madinaHotel'=> $this->faker->company(),
            'bedsPrice' => $this->faker->randomNumber(),
            'minaTentDetails' => $this->faker->sentence(),
            'arafatTentDetails' => $this->faker->sentence(),
            'transportDetails' => $this->faker->sentence(),
            'packageDetails'=> $this->faker->sentence(),

            'Th_airline' => $this->faker->company(),
            'Th_departmentDate'=> $this->faker->date(),
            'S_arrivalDate' => $this->faker->date(),

            'S_airline' => $this->faker->company(),
            'S_departmentDate' => $this->faker->date(),
            'Th_arrivalDate' => $this->faker->date(),
            'packagePrice' => $this->faker->randomNumber(6,true),
            
        ];
    
    }
}
