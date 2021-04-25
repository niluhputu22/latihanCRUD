@extends('bootstrap')
@section('konten')
    <div class="container">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title">Data Mata Kuliah</h4>

                <a href="{{ route('ujian.add') }}" class="btn btn-outline-info">Tambah Mata Kuliah</a>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujians as $ujian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ujian->nama_mk }}</td>
                                <td>{{ $ujian->dosen }}</td>
                                <td>{{ $ujian->jumlah_soal }}</td>
                                <td>{{ $ujian->keterangan }}</td>
                                <td>
                                    <a href="">Edit</a> | <a href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection