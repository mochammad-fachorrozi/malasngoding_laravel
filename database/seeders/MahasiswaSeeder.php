<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder manual
        // insert data ke tabel mahasiswa
        // DB::table('mahasiswa')->insert([
        //     'nama' => 'nabil',
        //     'umur' => '22',
        //     'alamat' => 'lombok'
        // ]);


        // faker
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {

            // insert data pake faker
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'umur' => $faker->numberBetween(17, 25),
                'alamat' => $faker->address
            ]);
        }
    }
}
