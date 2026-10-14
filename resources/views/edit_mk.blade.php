@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="{{ route('matakuliah.index') }}" class="text-decoration-none">Daftar Mata Kuliah</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Mata Kuliah</li>
                    </ol>
                </nav>
                <h2 class="fw-bold text-dark">
                    <i class="bi bi-pencil-square text-warning me-2"></i>Edit Mata Kuliah
                </h2>
                <p class="text-muted">
                    Perbarui data mata kuliah.
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

                    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_mk" class="form-label fw-semibold">
                                <i class="bi bi-book me-1"></i> Nama Mata Kuliah
                            </label>

                            <input
                                type="text"
                                id="nama_mk"
                                name="nama_mk"
                                class="form-control form-control-lg fs-6 @error('nama_mk') is-invalid @enderror"
                                placeholder="Masukkan nama mata kuliah"
                                value="{{ old('nama_mk', $mk->nama_mk) }}"
                                required>
                            @error('nama_mk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="sks" class="form-label fw-semibold">
                                <i class="bi bi-award me-1"></i> Jumlah SKS
                            </label>

                            <input
                                type="number"
                                id="sks"
                                name="sks"
                                min="1"
                                max="6"
                                class="form-control form-control-lg fs-6 @error('sks') is-invalid @enderror"
                                placeholder="Contoh: 3"
                                value="{{ old('sks', $mk->sks) }}"
                                required>
                            @error('sks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-2">

                            <a
                                href="{{ route('matakuliah.index') }}"
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