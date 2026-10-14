<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserModel;
use App\Models\MataKuliah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KelasSeeder::class,
        ]);

        UserModel::create([
            'nama' => 'Ikbal Feri',
            'nim' => '2417051031',
            'kelas_id' => 1,
        ]);

        UserModel::create([
            'nama' => 'Ahmad Fauzi',
            'nim' => '2417051005',
            'kelas_id' => 2,
        ]);

        MataKuliah::create([
            'nama_mk' => 'Praktikum Web Lanjut',
            'sks' => 3,
        ]);

        MataKuliah::create([
            'nama_mk' => 'Basis Data',
            'sks' => 3,
        ]);
    }
}
