<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            'description' => "Ecommer de prenda de vestir con IA para probador de ropa.",
            'short_des' => " Ecommerce de prenda de vestir.",
            'photo' => "image.jpg",
            'logo' => 'logo.jpg',
            'address' => "Santa cruz - Bolivia",
            'email' => "jorgeluistorrez631@gmail.com",
            'phone' => "73624419",
        );
        DB::table('settings')->insert($data);
    }
}