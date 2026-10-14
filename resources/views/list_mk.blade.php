@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Flash Alert Sukses / Error -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center shadow-sm border-0 border-start border-success border-4 rounded-3 mb-4" role="alert">
            <i class="bi bi-check-circle-fill text-success fs-4 me-3"></i>
            <div>
                <strong class="d-block">Berhasil!</strong>
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center shadow-sm border-0 border-start border-danger border-4 rounded-3 mb-4" role="alert">
            <i class="bi bi-exclamation-triangle-fill text-danger fs-4 me-3"></i>
            <div>
                <strong class="d-block">Gagal!</strong>
                <span>{{ session('error') }}</span>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h2 class="fw-bold mb-1 text-dark">
                <i class="bi bi-journal-bookmark-fill text-primary me-2"></i>Daftar Mata Kuliah
            </h2>
            <p class="text-muted mb-0">
                Data mata kuliah yang terdaftar pada sistem.
            </p>
        </div>

        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary btn-action rounded-pill px-4 shadow-sm">
            <i class="bi bi-plus-circle-fill me-1"></i> Tambah Mata Kuliah
        </a>
    </div>

    <!-- Mata Kuliah Table Card -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 px-4 text-center" style="width: 60px;">No</th>
                            <th class="py-3">ID</th>
                            <th class="py-3">Nama Mata Kuliah</th>
                            <th class="py-3 text-center">SKS</th>
                            <th class="py-3 text-center" style="width: 200px;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($mks as $mk)

                            <tr>
                                <td class="px-4 text-center fw-bold text-secondary">
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <span class="uuid-badge" title="{{ $mk->id }}">
                                        <i class="bi bi-key-fill text-warning me-1"></i>{{ $mk->id }}
                                    </span>
                                </td>

                                <td class="fw-semibold text-dark">
                                    {{ $mk->nama_mk }}
                                </td>

                                <td class="text-center">
                                    <span class="badge bg-secondary-subtle text-secondary-emphasis border px-3 py-2 rounded-pill fw-semibold">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>

                                <td class="text-center">
                                    <div class="d-inline-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                           class="btn btn-sm btn-outline-warning text-dark btn-action rounded-pill px-3 shadow-sm fw-medium d-flex align-items-center"
                                           title="Edit Mata Kuliah">
                                            <i class="bi bi-pencil-square me-1 text-warning-emphasis"></i> Edit
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                              method="POST"
                                              class="d-inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus mata kuliah &quot;{{ $mk->nama_mk }}&quot;?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-sm btn-outline-danger btn-action rounded-pill px-3 shadow-sm fw-medium d-flex align-items-center"
                                                    title="Hapus Mata Kuliah">
                                                <i class="bi bi-trash3-fill me-1"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="bi bi-folder-x fs-1 d-block mb-2 text-secondary opacity-50"></i>
                                    Belum ada data mata kuliah yang terdaftar.
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