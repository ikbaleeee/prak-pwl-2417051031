@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Pengguna</h2>
            <p class="text-muted mb-0">
                Data pengguna yang terdaftar pada sistem.
            </p>
        </div>

        <a href="{{ route('user.create') }}" class="btn btn-dark">
            + Tambah User
        </a>
    </div>

    <!-- User Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th class="px-4">ID</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($users as $user)

                            <tr>
                                <td class="px-4 fw-semibold">
                                    {{ $user->id }}
                                </td>

                                <td>
                                    {{ $user->nama }}
                                </td>

                                <td>
                                    {{ $user->nim }}
                                </td>

                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $user->nama_kelas }}
                                    </span>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    Belum ada data pengguna.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection