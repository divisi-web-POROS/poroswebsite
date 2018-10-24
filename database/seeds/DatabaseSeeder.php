<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Muhammad Iqbal Kurniawan',
    		'email' => 'm.kurniawanibal@gmail.com',
    		'password' => Hash::make('secret')
    	]);
        $this->call(UITableSeeder::class);
    }
}
