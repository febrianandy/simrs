<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('pasiens')->insert([
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->title,
                'no_telp' => $faker->phoneNumber,
                'email' => $faker->email,
                'alamat' => $faker->address,
            ]);
        }
    }
}
