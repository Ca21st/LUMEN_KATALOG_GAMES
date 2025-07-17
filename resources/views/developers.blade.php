@extends('layouts.main')

@section('title', 'Katalog Developer')

@section('content')
        <h1>Daftar Developer</h1>

        <h2 style="text-align:center; color:#2c3e50;">Tambah Developer Baru</h2>
        <form class="form-add" method="POST" action="/developers">
            <input type="text" name="name" placeholder="Nama Developer" required>
            <button type="submit">Tambah</button>
        </form>
        
        <ul>
            @foreach ($developers as $dev)
            <li>
                <span class="dev-name">{{ $dev->name }}</span>
                <form method="POST" action="/developers/{{ $dev->id }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Hapus</button>
                </form>
            </li>
            @endforeach
        </ul>
        
    @endsection