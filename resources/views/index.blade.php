@extends('layouts.base')

@section('content')
    <a href="/tambah-post">+ Tambah File Post</a>
    <br>
    <br>

    <table class="table">
        <tr>
            <th>Images</th>
            <th>Judul</th>
            <th>Content</th>
            <th>Opsi</th>
        </tr>
        @foreach ($posting as $p)
        <tr>
            <td>{{ $p->image}}</td>
            <td>{{ $p->judul}}</td>
            <td>{{ $p->content}}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>
        </tr>
            
        @endforeach
    </table>
@endsection('content')