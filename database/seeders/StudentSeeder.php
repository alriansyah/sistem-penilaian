<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $studentList = [
            ['name' => 'Madara', 'gender' => 'Laki-laki', 'nis' => '0101001', 'no_hp' => '085711111111', 'alamat' => 'Palembang'],
            ['name' => 'Obito', 'gender' => 'Laki-laki', 'nis' => '0101002', 'no_hp' => '085722222222', 'alamat' => 'Palembang'],
            ['name' => 'Izuna', 'gender' => 'Laki-laki', 'nis' => '0101003', 'no_hp' => '085733333333', 'alamat' => 'Palembang'],
            ['name' => 'Sasuke', 'gender' => 'Laki-laki', 'nis' => '0101004', 'no_hp' => '085744444444', 'alamat' => 'Palembang'],
            ['name' => 'Itachi', 'gender' => 'Laki-laki', 'nis' => '0101005', 'no_hp' => '085755555555', 'alamat' => 'Palembang'],
            ['name' => 'Shisui', 'gender' => 'Laki-laki', 'nis' => '0101006', 'no_hp' => '085766666666', 'alamat' => 'Palembang'],
            ['name' => 'Kabuto', 'gender' => 'Laki-laki', 'nis' => '0101007', 'no_hp' => '085777777777', 'alamat' => 'Belitang'],
            ['name' => 'Sakura', 'gender' => 'Perempuan', 'nis' => '0101008', 'no_hp' => '085788888888', 'alamat' => 'Belitang'],
            ['name' => 'Ino', 'gender' => 'Perempuan', 'nis' => '0101009', 'no_hp' => '085799999999', 'alamat' => 'Belitang'],
            ['name' => 'Hinata', 'gender' => 'Perempuan', 'nis' => '0101010', 'no_hp' => '085710101010', 'alamat' => 'Belitang'],
            ['name' => 'Tsunade', 'gender' => 'Perempuan', 'nis' => '0101011', 'no_hp' => '085712121212', 'alamat' => 'Belitang'],
            ['name' => 'Himawari', 'gender' => 'Perempuan', 'nis' => '0101012', 'no_hp' => '085713131313', 'alamat' => 'BMR'],
            ['name' => 'Sarada', 'gender' => 'Perempuan', 'nis' => '0101013', 'no_hp' => '085714141414', 'alamat' => 'BMR'],
            ['name' => 'Mitsuki', 'gender' => 'Laki-laki', 'nis' => '0101014', 'no_hp' => '085715151515', 'alamat' => 'BMR'],
            ['name' => 'Minato', 'gender' => 'Laki-laki', 'nis' => '0101015', 'no_hp' => '085716161616', 'alamat' => 'BMR'],
            ['name' => 'Kawaki', 'gender' => 'Laki-laki', 'nis' => '0101016', 'no_hp' => '085717171717', 'alamat' => 'BMR'],
        ];

        foreach($studentList as $value) {
            Student::insert([
                'name' => $value['name'],
                'gender' => $value['gender'],
                'nis' => $value['nis'],
                'no_hp' => $value['no_hp'],
                'alamat' => $value['alamat'],
                'email' => $value['name'].'.'.'konoha'.'@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => Arr::random([1, 2, 3]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        // Factory Faker
        Student::factory()
            ->count(1000)
            ->create();
    }
}