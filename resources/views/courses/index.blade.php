@extends('layouts.app')

@section('title', 'Daftar Kursus')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Daftar Kursus</h2>
            <p class="text-muted mb-0">
                Kelola data kursus yang tersedia di KursusKu.
            </p>
        </div>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Kursus</th>
                            <th>Biaya</th>
                            <th>Kuota</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->code }}</td>
                                <td>{{ $course->name }}</td>
                                <td>
                                    Rp {{ number_format($course->fee, 0, ',', '.') }}
                                </td>
                                <td>{{ $course->quota }}</td>
                                <td>
                                    {{ $course->start_date->format('d/m/Y') }}
                                </td>
                                <td>
                                    @if ($course->status === 'open')
                                        <span class="badge bg-success">Open</span>
                                    @elseif ($course->status === 'closed')
                                        <span class="badge bg-danger">Closed</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- Tombol Detail --}}
                                    <a href="{{ route('courses.show', $course) }}"
                                       class="btn btn-sm btn-info">
                                        Detail
                                     </a>

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('courses.edit', $course) }}"
                                     class="btn btn-sm btn-warning">
                                      Edit
                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('courses.destroy', $course) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus kursus ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                          Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    Belum ada data kursus.
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
