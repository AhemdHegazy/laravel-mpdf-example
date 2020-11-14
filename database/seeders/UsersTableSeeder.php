<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<40;$i++){
            User::create([
                'name'  => $faker->name,
                'email' => $faker->safeEmail,
                'password' => Str::random(40)
            ]);
        }
    }
}
