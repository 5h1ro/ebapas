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
            'from'             => 'Lapas Madiun',
            'case'             => 'Hacking',
            'status'           => 'Diproses'
        ]);
        $user->save();

        $user = Napi::create([
            'name'             => 'Gilang',
            'from'             => 'Lapas Magetan',
            'case'             => 'Pencurian 3 permen milkita',
            'status'           => 'Diproses'
        ]);
        $user->save();

        $user = Napi::create([
            'name'             => 'Nadia Irsyan',
            'from'             => 'Lapas Ngawi',
            'case'             => 'Pelanggaran Hak Asasi Kucing',
            'status'           => 'Diproses'
        ]);
        $user->save();
    }
}
