<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mahasiswa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'Id_mhs'=> '12314',
            'nm_mhs'=> 'Michael jackson',
            'alamat'=> 'Jalan jawa',
            'ttl'=> '2003-11-12',
            'status'=> 'inactive'
        ]);
    }
}
