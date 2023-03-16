<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        MataPelajaran::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $jurusanList = [
            ['name' => 'IPA'],
            ['name' => 'IPS'],
            ['name' => 'Bahasa Indonesia'],
            ['name' => 'Bahasa Inggris'],
            ['name' => 'Matematika'],
            ['name' => 'PKN'],
            ['name' => 'PAI'],
            ['name' => 'Seni Budaya'],
            ['name' => 'PenjasKes'],
        ];

        foreach ($jurusanList as $value) {
            MataPelajaran::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}