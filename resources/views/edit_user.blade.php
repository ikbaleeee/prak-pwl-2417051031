@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}" class="text-decoration-none">Daftar Pengguna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </nav>
                <h2 class="fw-bold text-dark">
                    <i class="bi bi-pencil-square text-warning me-2"></i>Edit Data Mahasiswa
                </h2>
                <p class="text-muted">
                    Perbarui informasi data mahasiswa pada database.
                </p>
            </div>

            <!-- Error Notification -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show rounded-3 shadow-sm border-0 border-start border-danger border-4" role="alert">
                    <div class="d-flex align-items-center mb-1">
                        <i class="bi bi-exclamation-triangle-fill text-danger me-2"></i>
                        <strong>Terjadi Kesalahan Pengisian:</strong>
                    </div>
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">
                                <i class="bi bi-person me-1"></i> Nama Lengkap
                            </label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control form-control-lg fs-6 @error('nama') is-invalid @enderror"
                                placeholder="Masukkan nama mahasiswa"
                                value="{{ old('nama', $user->nama) }}"
                                required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">
                                <i class="bi bi-card-text me-1"></i> NPM
                            </label>

                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                class="form-control form-control-lg fs-6 @error('npm') is-invalid @enderror"
                                placeholder="Masukkan NPM"
                                value="{{ old('npm', $user->nim) }}"
                                required>
                            @error('npm')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label fw-semibold">
                                <i class="bi bi-building me-1"></i> Kelas
                            </label>

                            <select
                                name="kelas_id"
                                id="kelas_id"
                                class="form-select form-select-lg fs-6 @error('kelas_id') is-invalid @enderror"
                                required>

                                <option value="">-- Pilih Kelas --</option>

                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}"
                                        {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                                        Kelas {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach

                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-2">

                            <a
                                href="{{ route('user.index') }}"
                                class="btn btn-outline-secondary rounded-pill px-4 btn-action">
                                <i class="bi bi-arrow-left me-1"></i> Batal
                            </a>

                            <button
                                type="submit"
                                class="btn btn-warning text-dark fw-semibold rounded-pill px-4 shadow-sm btn-action">
                                <i class="bi bi-check-circle-fill me-1"></i> Simpan Perubahan
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
