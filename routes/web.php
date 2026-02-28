<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});
Route::get('/gallery', function () {
    // Grab files from /public/sports
    $files = File::files(public_path('sports'));

    // Make a collection of public URLs, optionally sort naturally by filename
    $images = collect($files)
        ->sortBy(fn($f) => $f->getFilename(), SORT_NATURAL | SORT_FLAG_CASE)
        ->values()
        ->map(fn($file) => 'sports/' . $file->getFilename());

    // Pagination (30 per page)
    $perPage = 30;
    $page = (int) request('page', 1);

    $paginated = new LengthAwarePaginator(
        $images->forPage($page, $perPage)->values(),
        $images->count(),
        $perPage,
        $page,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    return view('gallery', ['images' => $paginated]);
});
Route::get('/manufacture', function () {
    return view('manufacture');
});

Route::get('/products', [ProductController::class, 'index']);