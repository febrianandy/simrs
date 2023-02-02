<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dokter;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
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
            DB::table('dokters')->insert([
                'nip' => $faker->creditCardNumber,
                'nama' => $faker->name,
                'spesialis' => $faker->sentence,
                'no_telp' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
    }
}
