<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{

    public function index (Request $request) {

        if($request->has('search')) {
            $data = Employees::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        }
        else {
            $data = Employees::paginate(100);
        }
        // dd($data); // dd untuk menampilkan data yang ada
        return view('datapegawai',[
            "title" => "Data Pegawai",
        ], compact('data'));

    }

    public function tambahpegawai () {
        return view('tambahdata',[
            "title" => "Tambah Pegawai",
        ]);
    }
    public function insertdata (Request $request) {
        // dd($request->all());
        $data = Employees::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata ($id) {
        $data = Employees::find($id);
        // dd($data);
        return view('tampildata',[
            "title" => "Tampilkan Data",
        ], compact('data'));
    }
    public function updatedata (Request $request, $id) {
        $data = Employees::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete ($id) {
        $data = Employees::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus');
    }

    public function company() {
        $data = Employees::all();
        return view('company',[
            "title" => "Company",
        ], compact('company'));
    }

}
