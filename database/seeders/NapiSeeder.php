<?php

namespace Database\Seeders;

use App\Models\Napi;
use Illuminate\Database\Seeder;

class NapiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Napi::create([
            'name'             => 'Hoirul Anam Bin H Soni',
            'idJail'           => '1',
            'case'             => 'Narkotika',
            'pk'               => 'Agung',
            'type'             => 'PP 99 Asimilasi & PB',
            'disposition'      => '2020-12-09',
            'number_tpp'       => '1',
            'date_tpp'         => '2021-01-11',
            'status'           => 'Diterima',
            'description'      => ''
        ]);
        $user->save();


        $user = Napi::create([
            'name'             => 'Agus Mohamad Solikin',
            'idJail'           => '1',
            'case'             => 'Narkotika',
            'pk'               => 'Sri Utami',
            'type'             => 'PB',
            'disposition'      => '2020-12-09',
            'number_tpp'       => '2',
            'date_tpp'         => '2021-01-11',
            'status'           => 'Diterima',
            'description'      => ''
        ]);
        $user->save();


        $user = Napi::create([
            'name'             => 'Subaidi Bin Moh Sukri',
            'idJail'           => '1',
            'case'             => 'Narkotika',
            'pk'               => 'Sri Endang',
            'type'             => 'PB',
            'disposition'      => '2020-12-09',
            'number_tpp'       => '3',
            'date_tpp'         => '2021-01-11',
            'status'           => 'Diterima',
            'description'      => ''
        ]);
        $user->save();
    }
}
