<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
			"username" => "mutashimbillah7",
			"password" => "123456",
			"email" => "mutashimb7@gmail.com"
		]);
		DB::table('admin')->insert([
			"username" => "elpsycongroo",
			"password" => "123456",
			"email" => "elpsycongroo7@gmail.com"
		]);
		DB::table('admin')->insert([
			"username" => "tutturu",
			"password" => "123456",
			"email" => "tutturuo7@gmail.com"
		]);
    }
}
