<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $roleList = [
            ['name' => 'Admin'],
            ['name' => 'Student'],
            ['name' => 'Teacher'],
        ];

        foreach ($roleList as $value) {
            Role::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}