<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $charlesKoko = new User([
           'id' => str::uuid(),
           'name' => 'Charles Koko',
           'email' => 'jephtekoko@gmail.com',
           'email_verified_at' => now(),
           'password' => Hash::make('ck_12345678!') ,
           'remember_token' => Str::random(10),
       ]);

       $charlesKoko->save();
    }
}
