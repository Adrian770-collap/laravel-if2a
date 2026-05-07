@extends('main')

@section('content')
<h1>Fakultas</h1> 
<img src="/gambar/univ.jpg" alt="" width="200" height="100">

<img src="/gambar/univ.jpg" alt="" width="200" height="100">

<table class="table table-bordered">
    
</table>
    @foreach ($result as $item)
        {{ $item->nama_fakultas }} - {{ $item->singkatan }} <br>
    @endforeach 
@endsection