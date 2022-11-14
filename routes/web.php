<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$faker = Faker::create('id_ID');
	$username = $faker->userName;
	$title = 'Dashboard';
	$cars = collect();
	$users = collect();

	for ($i = 0; $i < 5; $i++) {
		$cars->push([
			'nopol' => 'B ' . $faker->numerify('####') . ' ' . strtoupper($faker->lexify('???')),
			'last_service' => Carbon::parse($faker->dateTimeThisYear())->diffForHumans()
		]);

		$users->push([
			'name' => $faker->name(),
			'address' => $faker->address(),
			'phone' => $faker->phoneNumber()
		]);
	}

	return view('pages.dashboard', compact('title', 'cars', 'users', 'username'));
})->name('dashboard');

Route::get('service', function () {
	$title = 'Service';
	$faker = Faker::create('id_ID');
	$username = $faker->userName;
	$cars = collect();

	for ($i = 0; $i < 10; $i++) {
		$cars->push([
			'nopol' => 'B ' . $faker->numerify('####') . ' ' . strtoupper($faker->lexify('???')),
			'last_service' => Carbon::parse($faker->dateTimeThisYear())->diffForHumans()
		]);
	}
	return view('pages.service', compact('title', 'username', 'cars'));
})->name('service');

Route::get('cars', function () {
	$faker = Faker::create('id_ID');
	$username = $faker->userName;
	$title = 'Data Mobil';
	$car = collect();
	$car->push([
		'nopol' => 'B ' . $faker->numerify('####') . ' ' . strtoupper($faker->lexify('???')),
		'last_service' => Carbon::parse($faker->dateTimeThisYear())->diffForHumans(),
		'kilometer' => $faker->numerify('######'),
		'service_date' => Carbon::parse($faker->dateTimeThisMonth()),
		'info' => $faker->sentence(20)
	]);

	return view('pages.detail', compact('username', 'title', 'car'));
})->name('cars');
