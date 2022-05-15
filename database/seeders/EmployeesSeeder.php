<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            // 'company_id' => '1',
            'nama' => 'Nasruddin',
            'jenis_kelamin' => 'laki-laki',
            'nip' => '200180020',
            'status' => 'hadir',
            'foto' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // DB::table('company')->insert([
        //     'nama_company' => 'PT. ABC',
        //     'csip' => '123456789',
        //     'pekerjaan' => 'Programmer',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        
    }
}
