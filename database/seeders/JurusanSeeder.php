<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Jurusan::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $jurusanList = [
            ['name' => 'TKJ'],
            ['name' => 'TKR'],
            ['name' => 'RPL'],
            ['name' => 'Akuntansi'],
        ];

        foreach ($jurusanList as $value) {
            Jurusan::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}