<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index () {
        $data = Employees::all();
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

}
