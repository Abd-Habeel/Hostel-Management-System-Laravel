<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
	return [
		'name' => 'juan delacrus',
		'email' => 'admin@gmail.com',
		'job_title' => $faker->title,
		'password' => bcrypt('admin123'),
		'remember_token' => str_random(10)
	];
});