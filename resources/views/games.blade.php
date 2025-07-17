@extends('layouts.main')

@section('title', 'Katalog Game')

@section('content')
<h1>Katalog Game</h1>

<h2>Tambah Game Baru</h2>
<form class="form-add" method="POST" action="/games">
    <input type="text" name="title" placeholder="Judul Game" required>
    <input type="text" name="genre" placeholder="Genre" required>
    <select name="developer_id" required>
        <option value="">Pilih Developer</option>
        @foreach ($developers as $dev)
        <option value="{{ $dev->id }}">{{ $dev->name }}</option>
        @endforeach
    </select>
    <button type="submit">Tambah</button>
</form>

<ul>
    @foreach ($games as $game)
    <li>
        <div class="game-info">
            <span class="game-title">{{ $game->title }}</span>
            <span class="game-genre">Genre: {{ $game->genre }}</span>
            <span class="game-dev">Developer: {{ $game->developer->name ?? 'Unknown' }}</span>
        </div>
        <form method="POST" action="/games/{{ $game->id }}">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Hapus</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection