@extends('bootstrap')

@section('konten')
<div class="container">
    <h2>Input Mata Kuliah</h2>
    <form action="{{route('ujian.save')}}" method="post">
        @csrf
    <div class="form-group">
        <label>Mata Kuliah</label>
    <input type="text" name="nama_mk" class="form-control">
</div>
<div class="from-group">
    <label>Dosen</label>
    <input type="text" name="dosen" class="form-control">
</div>
<div class="from-group">
    <label>Jumlah Soal</label>
    <input type="number" name="jumlah_soal" class="form-control">
</div>
<div class="from-group">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control"></textarea>
</div>
<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
<a href="{{ route('ujian.index') }}" class="btn btn-secondary">Batal</a>
</form>
</div>
@endsection
