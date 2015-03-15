<?php
	
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Customer;
 
class CustomerTableSeeder extends Seeder {
 
  public function run()
  {
  	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 100; $i++)
	{
	  $user = Customer::create(array(
	    'first_name' => $faker->firstName,
	    'last_name' => $faker->lastName,
	    'address_1' => $faker->secondaryAddress,
	    'address_2' => $faker->streetName,
	    'town' => $faker->city,
	    'county' => $faker->state,
	    'postcode' => $faker->postcode,
	    'age' => rand(18, 65),
	    'email' => $faker->freeEmail
	  ));
	}
  }
}