@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <div class="mb-4">
                <h2 class="fw-bold">Buat Pengguna Baru</h2>
                <p class="text-muted">
                    Tambahkan pengguna baru ke dalam sistem.
                </p>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">
                                Nama
                            </label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                class="form-control"
                                placeholder="Masukkan nama"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label fw-semibold">
                                NPM
                            </label>

                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                class="form-control"
                                placeholder="Masukkan NPM"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label fw-semibold">
                                Kelas
                            </label>

                            <select
                                name="kelas_id"
                                id="kelas_id"
                                class="form-select"
                                required>

                                <option value="">-- Pilih Kelas --</option>

                                @foreach ($kelas as $kelasItem)
                                    <option value="{{ $kelasItem->id }}">
                                        {{ $kelasItem->nama_kelas }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('user.index') }}"
                                class="btn btn-outline-secondary">
                                Kembali
                            </a>

                            <button
                                type="submit"
                                class="btn btn-dark">
                                Simpan User
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection