@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Toko</h1>
    <form action="{{ route('tokos.update', $toko->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Toko:</label>
            <input type="text" name="nama" class="form-control" value="{{ $toko->nama }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control">{{ $toko->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $toko->lokasi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('tokos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
