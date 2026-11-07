@extends('layouts.app')

@section('title', 'Tambah Kursus')

@section('content')
<div class="container py-4">

    <div class="mb-4">
        <a href="{{ route('courses.index') }}"
           class="btn btn-outline-secondary mb-3">
            &larr; Kembali
        </a>

        <h2 class="fw-bold">Tambah Kursus</h2>
        <p class="text-muted">
            Masukkan informasi kursus baru ke dalam sistem KursusKu.
        </p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Kursus</label>
                    <input type="text" name="code"
                           class="form-control @error('code') is-invalid @enderror"
                           value="{{ old('code') }}"
                           placeholder="Contoh: WEB-101">

                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kursus</label>
                    <input type="text" name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           placeholder="Masukkan nama kursus">

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description"
                              class="form-control @error('description') is-invalid @enderror"
                              rows="3"
                              placeholder="Deskripsi singkat kursus">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Biaya Kursus (Rp)</label>
                        <input type="number" name="fee"
                               class="form-control @error('fee') is-invalid @enderror"
                               value="{{ old('fee', 0) }}"
                               min="0">

                        @error('fee')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Kuota Peserta</label>
                        <input type="number" name="quota"
                               class="form-control @error('quota') is-invalid @enderror"
                               value="{{ old('quota', 20) }}"
                               min="1" max="500">

                        @error('quota')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Mulai</label>
                    <input type="date" name="start_date"
                           class="form-control @error('start_date') is-invalid @enderror"
                           value="{{ old('start_date') }}">

                    @error('start_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Status Kursus</label>
                    <select name="status"
                            class="form-select @error('status') is-invalid @enderror">
                        <option value="">-- Pilih Status --</option>
                        <option value="draft" @selected(old('status') == 'draft')>Draft</option>
                        <option value="open" @selected(old('status') == 'open')>Open</option>
                        <option value="closed" @selected(old('status') == 'closed')>Closed</option>
                    </select>

                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Simpan Kursus
                    </button>

                    <a href="{{ route('courses.index') }}"
                       class="btn btn-outline-secondary">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
