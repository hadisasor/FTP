<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hajjpackage;
use App\Models\Umrahpackage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        //  Hajjpackage::factory(10)->create();
        //  Umrahpackage::factory(10)->create();

          // \App\Models\User::factory(10)->create();


        \App\Models\User::factory(1)->create([
          'fstname' => 'Eyad',
          'lstname' => 'Hajisa-i',
          'email' => 'Yadoofatani@admin.com',
          'email_verified_at' => now(),
          'password' => '123890Yadoo', // password
          'phone'=> fake()->phoneNumber(),
          'userType' => fake()->randomElement(['Admin']),
          'remember_token' => Str::random(10),
        ]);


        \App\Models\User::factory(1)->create([
          'fstname' => 'Eyad',
          'lstname' => 'Hajisa-i',
          'email' => 'Yadoofatani@Tokseh.com',
          'email_verified_at' => now(),
          'password' => '123890Yadoo', // password
          'phone'=> fake()->phoneNumber(),
          'userType' => fake()->randomElement(['Tokseh']),
          'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(1)->create([
          'fstname' => 'Eyad',
          'lstname' => 'Hajisa-i',
          'email' => 'Yadoofatani@gmail.com',
          'email_verified_at' => now(),
          'password' => '123890Yadoo', // password
          'phone'=> fake()->phoneNumber(),
          'userType' => fake()->randomElement(['Pilgrim']),
          'remember_token' => Str::random(10),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
