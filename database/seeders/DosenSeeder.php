<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            "niph" => "12345678",
            "nama" => "Nur Fajri Azhar",
            "jurusan" => "Matematika dan Teknologi Informasi",
            "program_studi" => "Informatika"
        ]);
    }
}
