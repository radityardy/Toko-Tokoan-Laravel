@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Toko</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $toko->nama }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Deskripsi:</strong> {{ $toko->deskripsi }}</p>
            <p><strong>Lokasi:</strong> {{ $toko->lokasi }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('tokos.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('tokos.edit', $toko->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('tokos.destroy', $toko->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
