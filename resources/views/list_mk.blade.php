@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ $title }}</h1>

    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">
        Tambah Mata Kuliah
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mks as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection