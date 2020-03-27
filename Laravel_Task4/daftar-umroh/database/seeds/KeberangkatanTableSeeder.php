<?php

use Illuminate\Database\Seeder;

class KeberangkatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keberangkatan')->insert([
			"nama_paket" => "Paket Bintang 5",
			"keberangkatan" => "2020-02-20",
			"kepulangan" => "2020-02-29",
			"hotel_makkah" => "Zamzam Tower",
			"hotel_madinah" => "Roudhah Assalafiyah",
			"pesawat" => "SV Saudi Airlanes",
			"harga" => "27000000",
			"id_admin" => "1"
		]);
		DB::table('keberangkatan')->insert([
			"nama_paket" => "Paket Bintang Ekonomi Bintang 4",
			"keberangkatan" => "2020-02-21",
			"kepulangan" => "2020-02-29",
			"hotel_makkah" => "Makkarem Ajyad",
			"hotel_madinah" => "Madinah Concourd",
			"pesawat" => "SV Saudi Airlanes",
			"harga" => "24000000",
			"id_admin" => "2"
		]);
		DB::table('keberangkatan')->insert([
			"nama_paket" => "Paket Bintang Super Ekonomi",
			"keberangkatan" => "2020-02-22",
			"kepulangan" => "2020-03-01",
			"hotel_makkah" => "Makkah Hotel",
			"hotel_madinah" => "Madinah Concourd",
			"pesawat" => "SV Saudi Airlanes",
			"harga" => "21000000",
			"id_admin" => "3"
		]);
    }
}
