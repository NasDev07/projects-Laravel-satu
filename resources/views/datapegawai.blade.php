@extends('layouts.main')

@section('content')
    <h1 class="my-3 text-primary">Data Absen Pegawai</h1>

    <a href="/tambahpegawai" class="btn btn-success">Absen +</a>

    <div class="row">
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ $message }}
        </div>
        @endif --}}
        <table class="table table-bordered border-primary mt-4 table-responsive table-hover">
            <thead class="bg-info">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Jadwal Absen</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <img src="{{ asset('images/' . $row->foto) }}" width="50" alt="">
                        </td>
                        <td>{{ $row->jenis_kelamin }}</td>
                        <td>{{ $row->nip }}</td>
                        <td>{{ $row->created_at }}</td> <!-- ->diffForHumans() (ini unutk 01 minute ago , format) -->
                        <td>{{ $row->status }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="#" type="button" class="btn btn-danger delete" data-id="{{ $row->id }}"
                                data-nama="{{ $row->nama }}">Delete</a>
                        </td>
                        {{-- <td>
                            @foreach ($data->row as $absen)
                                <li>{{ $absen->csip }}</li>
                            @endforeach
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="pegawai" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
