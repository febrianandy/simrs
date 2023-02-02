<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ObatSeeder extends Seeder
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
            DB::table('obats')->insert([
                'nama_obat' => $faker->name,
                'jenis_obat' => $faker->title,
                'harga' => $faker->randomNumber,
                'stok' => $faker->randomNumber,
            ]);
        }
    }
}
