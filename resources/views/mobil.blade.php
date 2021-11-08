@extends('layout.mainlayout')  
@section('title', 'Mobil')
@section('main_content')
<div class="container">
    <a href="{{route('mobil.create')}}">
        <button type="submit" class="btn btn-primary mb-2">Add Mobil</button>
    </a> </div>
<table class="table table-striped">
    <tr>
        <th>No </th>
        <th>Merk</th>
        <th>Nama</th>
        <th>No Plat</th>
        <th>Action</th>
    </tr>

    @foreach ($mobils as $mob)
    @php ($i = $loop->index)
            @php($i++)

    <tr>
        <td>{{ $i }}</td>
        <td>{{ $mob['merk'] }}</td>
        <td>{{ $mob['nama'] }}</td>
        <td>{{ $mob['plat'] }}</td>
    <td>
        <div class="d-grid d-md-flex justify-content-center">
            <a href="{{ route('mobil.show', $mob->nama) }}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
            <a href="{{ route('mobil.edit', $mob['nama']) }}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
            <form action="{{ route('mobil.destroy', $mob['nama']) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
    </td>
    </tr>
    @endforeach
</table>
@endsection
