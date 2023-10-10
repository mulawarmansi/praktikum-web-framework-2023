@extends('layouts.base')

@section('content')
<div class="container">
    <form class="form" action="/tambahpost/store" method="post">
        {{ csrf_field() }}
        Judul:
        <input type="text" name="judul"><br>
        Content:
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br><input type="submit" value="Tambah post">
    </form>
</div>
@endsection

