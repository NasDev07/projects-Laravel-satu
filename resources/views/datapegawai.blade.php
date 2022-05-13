@extends('layouts.main')

@section('content')
    <h1 class="my-3 text-primary">Data Pegawai</h1>

    <a href="/tambahpegawai" class="btn btn-success">Tambah +</a>

    <div class="row">
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ $message }}
        </div>
        @endif --}}
        <table class="table table-bordered border-primary mt-4 table-responsive">
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
                        <td>0{{ $row->notelpon }}</td>
                        <td>{{ $row->created_at }}</td> <!-- ->diffForHumans() (ini unutk 01 minute ago , format) -->
                        <td>0{{ $row->notelpon }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="#" type="button" class="btn btn-danger delete" data-id="{{ $row->id }}"
                                data-nama="{{ $row->nama }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="/pegawai" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="/tampilkandata">1</a></li>
            <li class="page-item"><a class="page-link" href="/tampilkandata">2</a></li>
            <li class="page-item"><a class="page-link" href="/tampilkandata">3</a></li>
            <li class="page-item">
                <a class="page-link" href="/pegawai" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
