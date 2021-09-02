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
            'name'             => 'Bima Andriansyah',
            'idJail'           => '1',
            'case'             => 'Hacking',
            'status'           => 'Diproses'
        ]);
        $user->save();

        $user = Napi::create([
            'name'             => 'Gilang',
            'idJail'           => '2',
            'case'             => 'Pencurian 3 permen milkita',
            'status'           => 'Diproses'
        ]);
        $user->save();

        $user = Napi::create([
            'name'             => 'Nadia Irsyan',
            'idJail'           => '3',
            'case'             => 'Pelanggaran Hak Asasi Kucing',
            'status'           => 'Diproses'
        ]);
        $user->save();
    }
}
