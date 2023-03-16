<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Teacher::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $mkList = [
            ['name' => 'Tuti', 'gender' => 'Perempuan', 'nip' => '0101017', 'no_hp' => '085718181818', 'alamat' => 'Palembang'],
            ['name' => 'Marjuki', 'gender' => 'Laki-laki', 'nip' => '0101018', 'no_hp' => '085719191919', 'alamat' => 'Palembang'],
            ['name' => 'Wati', 'gender' => 'Perempuan', 'nip' => '0101019', 'no_hp' => '085720202020', 'alamat' => 'Palembang'],
            ['name' => 'Syaiful', 'gender' => 'Laki-laki', 'nip' => '0101020', 'no_hp' => '085721212121', 'alamat' => 'Palembang'],
            ['name' => 'Anwar', 'gender' => 'Laki-laki', 'nip' => '0101021', 'no_hp' => '085722222222', 'alamat' => 'Belitang'],
            ['name' => 'Aldito', 'gender' => 'Laki-laki', 'nip' => '0101022', 'no_hp' => '085723232323', 'alamat' => 'Belitang'],
            ['name' => 'Zahra', 'gender' => 'Perempuan', 'nip' => '0101023', 'no_hp' => '085724242424', 'alamat' => 'Belitang'],
            ['name' => 'Tika', 'gender' => 'Perempuan', 'nip' => '0101024', 'no_hp' => '085725252525', 'alamat' => 'Belitang'],
            ['name' => 'Malika', 'gender' => 'Perempuan', 'nip' => '0101025', 'no_hp' => '085726262626', 'alamat' => 'Belitang'],
            ['name' => 'Marwan', 'gender' => 'Laki-laki', 'nip' => '0101026', 'no_hp' => '085727272727', 'alamat' => 'BMR'],
            ['name' => 'Supri', 'gender' => 'Laki-laki', 'nip' => '0101027', 'no_hp' => '085728282828', 'alamat' => 'BMR'],
            ['name' => 'Gusti', 'gender' => 'Laki-laki', 'nip' => '0101028', 'no_hp' => '085729292929', 'alamat' => 'BMR'],
            ['name' => 'Putra', 'gender' => 'Laki-laki', 'nip' => '0101029', 'no_hp' => '085730303030', 'alamat' => 'BMR'],
            ['name' => 'Dede', 'gender' => 'Laki-laki', 'nip' => '0101030', 'no_hp' => '085731313131', 'alamat' => 'BMR'],
            ['name' => 'Siti', 'gender' => 'Perempuan', 'nip' => '0101031', 'no_hp' => '085732323232', 'alamat' => 'BMR'],
            ['name' => 'Sri Wahyuni', 'gender' => 'Perempuan', 'nip' => '0101032', 'no_hp' => '085733333333', 'alamat' => 'BMR'],
            ['name' => 'Yuni', 'gender' => 'Perempuan', 'nip' => '0101033', 'no_hp' => '085734343434', 'alamat' => 'Belitang'],
            ['name' => 'Yasmin', 'gender' => 'Perempuan', 'nip' => '0101034', 'no_hp' => '085735353535', 'alamat' => 'Belitang'],
            ['name' => 'Intan Saputri', 'gender' => 'Perempuan', 'nip' => '0101035', 'no_hp' => '085736363636', 'alamat' => 'Belitang'],
        ];

        foreach ($mkList as $value) {
            Teacher::insert([
                'name' => $value['name'],
                'gender' => $value['gender'],
                'nip' => $value['nip'],
                'no_hp' => $value['no_hp'],
                'alamat' => $value['alamat'],
                'email' => $value['name'].'.'.'guru'.'@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}