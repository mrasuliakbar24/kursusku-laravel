
@extends('layouts.app')

@section('title', 'Edit Kursus')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Edit Kursus</h2>
            <p class="text-muted mb-0">Perbarui informasi kursus.</p>
        </div>

        <a href="{{ route('courses.index') }}"
           class="btn btn-outline-secondary">
            Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <form action="{{ route('courses.update', $course) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kode Kursus</label>
                    <input type="text"
                           name="code"
                           class="form-control @error('code') is-invalid @enderror"
                           value="{{ old('code', $course->code) }}">

                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kursus</label>
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $course->name) }}">

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description"
                              class="form-control @error('description') is-invalid @enderror"
                              rows="3">{{ old('description', $course->description) }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Biaya Kursus</label>
                    <input type="number"
                           name="fee"
                           class="form-control @error('fee') is-invalid @enderror"
                           value="{{ old('fee', $course->fee) }}">

                    @error('fee')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kuota Peserta</label>
                    <input type="number"
                           name="quota"
                           class="form-control @error('quota') is-invalid @enderror"
                           value="{{ old('quota', $course->quota) }}">

                    @error('quota')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Mulai</label>
                    <input type="date"
                           name="start_date"
                           class="form-control @error('start_date') is-invalid @enderror"
                           value="{{ old('start_date', $course->start_date->format('Y-m-d')) }}">

                    @error('start_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Status</label>
                    <select name="status"
                            class="form-select @error('status') is-invalid @enderror">

                        <option value="draft"
                            {{ old('status', $course->status) == 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>

                        <option value="open"
                            {{ old('status', $course->status) == 'open' ? 'selected' : '' }}>
                            Open
                        </option>

                        <option value="closed"
                            {{ old('status', $course->status) == 'closed' ? 'selected' : '' }}>
                            Closed
                        </option>
                    </select>

                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

                <a href="{{ route('courses.index') }}"
                   class="btn btn-secondary">
                    Batal
                </a>

            </form>

        </div>
    </div>
</div>
@endsection
