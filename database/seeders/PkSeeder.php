<?php

namespace Database\Seeders;

use App\Models\Pk;
use Illuminate\Database\Seeder;

class PkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Ibnu Syukur',
            'Sugeng Larianto',
            'Sri Utami',
            'Sri Endang Lestari',
            'Sudiro',
            'Widodo',
            'Maji Harwanto',
            'Budi Prasodjo',
            'Sukarman',
            'Erlyn Widhiana',
            'Tri Lestari',
            'Nining Sulistyowati',
            'Ninik Lestari',
            'Yudha Mei S',
            'Heri Ardianto',
            'Mirna Fitri NCD',
            'Nodya Wuri',
            'Nurul Akmalah',
            'Yurika Oceane RU',
            'Eddy Bono',
            'Eni Mindayani',
            'Gatot Budiarso',
            'Hartatik',
            'Supeni',
            'Supriyadi',
            'Marinda Purnasari',
            'Agung Witjaksono',
            'Syifaurrahmah I'
        ];
        foreach ($data as $array) {
            $user = Pk::create([
                'name'             => $array
            ]);
            $user->save();
        };
    }
}
