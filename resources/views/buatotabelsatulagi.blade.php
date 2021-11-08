@extends('layout.mainlayout')  
@section('title', 'Pinjam')
@section('main_content')
<div class="container">
    <a href="{{route('pinjam.create')}}">
        <button type="submit" class="btn btn-primary mb-2">Add Pinjam</button>
    </a> </div>
<table class="table table-striped">
    <tr>
        <th>No </th>
        <th>Nama Peminjam</th>
        <th>No. KTP</th>
        <th>Mobil yang Dipinjam</th>
        <th>Action</th>
    </tr>

    @foreach ($pinjams as $pin)
    @php ($i = $loop->index)
            @php($i++)

    <tr>
        <td>{{ $i }}</td>
        <td>{{ $pin['namap'] }}</td>
        <td>{{ $pin['ktp'] }}</td>
        <td>{{ $pin['mobilp'] }}</td>
    <td>
        <div class="d-grid d-md-flex justify-content-center">
            <a href="{{ route('pinjam.show', $pin->id) }}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
            <a href="{{ route('pinjam.edit', $pin->id) }}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
            <form action="{{ route('pinjam.destroy', $pin->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
    </td>
    </tr>
    @endforeach
</table>
@endsection
