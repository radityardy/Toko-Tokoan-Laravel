@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Toko Baru</h1>
    <form action="{{ route('tokos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Toko:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('tokos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
