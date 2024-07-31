@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Toko</h1>
    <a href="{{ route('tokos.create') }}" class="btn btn-primary mb-3">Tambah Toko</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
                <th width="280px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tokos as $toko)
                <tr>
                    <td>{{ $toko->id }}</td>
                    <td>{{ $toko->nama }}</td>
                    <td>{{ $toko->deskripsi }}</td>
                    <td>{{ $toko->lokasi }}</td>
                    <td>
                        <a href="{{ route('tokos.show', $toko->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('tokos.edit', $toko->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tokos.destroy', $toko->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
