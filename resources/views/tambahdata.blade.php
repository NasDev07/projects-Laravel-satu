@extends('layouts.main')

@section('content')
    <h1 class="my-5 text-primary">Tambah Data Pegawai</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nip</label>
                            <input type="number" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Compony</label>
                            <input type="text" name="nama_compony" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> --}}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kehadiran</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option selected>Kehadiran</option>
                                <option value="hadir">hadir</option>
                                <option value="alpha">alpha</option>
                                <option value="izin">izin</option>
                                <option value="sakit">sakit</option>
                                <option value="cuti">cuti</option>
                                <option value="tidakhadir">tidak hadir</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Upload Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
