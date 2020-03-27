<?php

use Illuminate\Database\Seeder;

class JamaahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jamaah')->insert([
			"nama_lengkap" => "Abdul Hakim Alafif",
			"nomor_ktp" => "1111222233334444",
			"nomor_telepon" => "081314151617",
			"email" => "afif2012@gmail.com",
			"id_keberangkatan" => "1"
		]);
		DB::table('jamaah')->insert([
			"nama_lengkap" => "Taupik Hidayat",
			"nomor_ktp" => "5555666677778888",
			"nomor_telepon" => "081122334455",
			"email" => "taupikhidayat@gmail.com",
			"id_keberangkatan" => "2"
		]);
		DB::table('jamaah')->insert([
			"nama_lengkap" => "Mumun Maemunah",
			"nomor_ktp" => "1290129012901290",
			"nomor_telepon" => "081234567890",
			"email" => "mumunmaemunah@gmail.com",
			"id_keberangkatan" => "3"
		]);
    }
}
