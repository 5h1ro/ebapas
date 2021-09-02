<?php

namespace Database\Seeders;

use App\Models\Jail;
use Illuminate\Database\Seeder;

class JailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Jail::create([
            'name'             => 'Lapas Madiun'
        ]);
        $user->save();
        $user = Jail::create([
            'name'             => 'Lapas Ngawi'
        ]);
        $user->save();
        $user = Jail::create([
            'name'             => 'Lapas Magetan'
        ]);
        $user->save();
    }
}
