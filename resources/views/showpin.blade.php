@extends('layout.mainlayout')
@section('title','Data Peminjam')

@section('main_content')
<div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>{{$pinjam['namap']}}</h1>
    <p>No. KTP: {{$pinjam['ktp']}}</p>
    <p>Mobil: {{$pinjam['mobilp']}}</p>
</div>

@endsection