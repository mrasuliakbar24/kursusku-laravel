
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

// Route Home (Praktikum 7)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Pendaftaran (Praktikum 9)
Route::get('/pendaftaran', function () {
    $courses = [
        1 => ['name' => 'Web Dasar'],
        2 => ['name' => 'PHP Dasar'],
        3 => ['name' => 'Laravel Dasar'],
    ];

    return view('enrollments.create', compact('courses'));
})->name('enrollments.create');

// Route Validasi Pendaftaran
Route::post('/pendaftaran/preview', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'min:3', 'max:100'],
        'email' => ['required', 'email'],
        'course_id' => ['required', 'integer', 'in:1,2,3'],
    ]);

    return back()
        ->with('success', 'Form lolos validasi. Database akan ditambahkan pada pertemuan berikutnya.')
        ->withInput();
})->name('enrollments.preview');

// Route Ketersediaan Kursi Ajax
Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => [
            'course' => 'Web Dasar',
            'remaining' => 12,
            'status' => 'open',
        ],
        2 => [
            'course' => 'PHP Dasar',
            'remaining' => 8,
            'status' => 'open',
        ],
        3 => [
            'course' => 'Laravel Dasar',
            'remaining' => 4,
            'status' => 'open',
        ],
    ];

    abort_unless(isset($availability[$course]), 404);

    return response()->json($availability[$course]);
})->name('courses.availability');

// Route CRUD Kursus (Praktikum 10)
Route::resource('courses', CourseController::class);
