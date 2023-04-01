@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btnsuccess" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
        </div>
        <form method="get" action="{{ route('mahasiswas.index') }}" class="col-7 d-flex justify-content-start">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" value="{{ request('search') }}" id="search" placeholder="Keyword Pencarian" aria-label="Keyword Pencarian" aria-describedby="button">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button"> Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No_HP</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>
        <td>{{ $Mahasiswa->nim }}</td>
        <td>{{ $Mahasiswa->nama }}</td>
        <td>{{ $Mahasiswa->tanggal_lahir }}</td>
        <td>{{ $Mahasiswa->kelas }}</td>
        <td>{{ $Mahasiswa->jurusan }}</td>
        <td>{{ $Mahasiswa->email }}</td>
        <td>{{ $Mahasiswa->no_hp }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy', $Mahasiswa->nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswas.show', $Mahasiswa->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $Mahasiswa->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $mahasiswas->links() }}

@endsection
