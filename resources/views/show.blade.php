@extends('layout.mainlayout')
@section('title','Mobil')

@section('main_content')
<div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>{{$mobil['nama']}}</h1>
    <p>Merk: {{$mobil['merk']}}</p>
    <p>Plat: {{$mobil['plat']}}</p>
</div>

@endsection