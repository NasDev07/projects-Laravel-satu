<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employees extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $datas = ['created_at', 'updated_at'];

    public function allData() {
        // return DB::table('employees')
        //     ->select('employees.*', 'company.*')
        //     ->leftJoin('company', 'employees.id', '=', 'company.company_id')
        //     ->get();

            return DB::table('employees')
            ->select('company.*', 'employees.*')
            ->leftJoin('company', 'company.company_id', '=', 'Employees.id')
            ->get();

    }
}
