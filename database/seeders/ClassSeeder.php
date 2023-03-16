<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $classList = [
            ['name' => '10A'],
            ['name' => '10B'],
            ['name' => '10C'],
            ['name' => '10D'],
            ['name' => '10E'],
            ['name' => '11A'],
            ['name' => '11B'],
            ['name' => '11C'],
            ['name' => '11D'],
            ['name' => '11E'],
            ['name' => '12A'],
            ['name' => '12B'],
            ['name' => '12C'],
            ['name' => '12D'],
            ['name' => '12E'],
        ];

        foreach ($classList as $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}