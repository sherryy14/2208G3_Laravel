<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as RegFaker;
class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = RegFaker::create();


      for ($i=0; $i <=100; $i++) { 
        $reg = new Registration();
        $reg->name = $fake->name;
        $reg->email =  $fake->email ;
        $reg->city =  $fake->city ;
        $reg->pass = $fake->password;
        $reg->phone =  '0344555644';
        $reg->save();
      }
    }
}
