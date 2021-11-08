@extends('layout.mainlayout')
@section('title','Add')
@section('main_content')
<form action="{{route('mobil.store')}}" method="POST">
    @csrf
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h1 align="center">Create Mobil</h1>
                <div class="form-group">
                    <label for="" class="label-control">Merk Mobil</label>
                    <input type="text" name="merk" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="" class="label-control">Nama</label>
                    <input type="text" name="nama" class="form-control">
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
