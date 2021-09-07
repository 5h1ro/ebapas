<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Asimilasi',
            'PB (Pembebasan Bersyarat)',
            'CB (Cuti Bersyarat)',
            'CMB (Cuti Menjelang Bebas)',
            'PiB (Pidana Bersyarat)',
            'CMK (Cuti Mengunjungi Keluarga)',
            'Pembinaan Awal',
            'Perubahan Pidana',
            'Pemindahan',
            'Di bawah 12 tahun',
            'Diversi',
            'Sidang',
            'AKOT',
            'Pidana Pengawasan',
            'LPKA',
            'LPKS',
            'Pondok'
        ];
        foreach ($data as $array) {
            $user = Type::create([
                'name'             => $array
            ]);
            $user->save();
        };
    }
}
