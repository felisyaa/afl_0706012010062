@extends('layout.mainlayout')
@section('title','Add')
@section('main_content')
<form action="{{route('pinjam.store')}}" method="POST">
    @csrf
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            <h1 align="center">Pinjam Mobil</h1>
                <div class="form-group">
                    <label for="" class="label-control">Nama Peminjam</label>
                    <input type="text" name="namap" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="" class="label-control">No. KTP</label>
                    <input type="text" name="ktp" class="form-control">
                </div>
    
                <div class="form-group">
                    <label for="" class="label-control">Mobil yg Dipinjam</label>
                    {{-- <input name="mobilp" class="form-control"> --}}
                </div><select name="mobilp" class="form-control">
                    <option value="" selected disabled hidden>select car</option>
                    @foreach ($mobil as $mob)
                        <option value="{{$mob['nama']}}">{{$mob['nama']}}</option>
                        
                    @endforeach
                </select>
                <br>
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
