<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Data_awal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'jelitachan';
        $admin->email = 'jlytchn@gmail.com';
        $admin->password = bcrypt('123123123');
        $admin->telepon = '08777777777';
        $admin->nik = '6171281004';
        $admin->level = 'admin';
        $admin->save();


        $petugas = new User();
        $petugas->name = 'nopall';
        $petugas->email = 'nopalgaming@gmail.com';
        $petugas->password = bcrypt('123123123');
        $petugas->telepon = '08777777777';
        $petugas->nik = '6171111111';
        $petugas->level = 'petugas';
        $petugas->save();
    }
}
