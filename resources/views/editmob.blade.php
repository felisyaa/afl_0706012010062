@extends('layout.mainlayout')
@section('title','Edit')
@section('main_content')
<form action="{{route('mobil.update', $mobil->nama)}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
        <div class="row">
    
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h1 align="center">Edit Mobil</h1>
                <div class="form-group">
                    <label for="" class="label-control">Merk Mobil</label>
                    <input type="text" name="merk" class="form-control" value = "{{ $mobil->merk }}" readonly>
                </div>
    
                <div class="form-group">
                    <label for="" class="label-control">Nama</label>
                    <input type="text" name="nama" class="form-control" value = "{{ $mobil->nama }}" readonly>
                </div>
    
                <div class="form-group">
                    <label for="" class="label-control">Plat</label>
                    <input name="plat" class="form-control">
                </div>
                <br>
    
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
