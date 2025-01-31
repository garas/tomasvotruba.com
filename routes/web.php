<?php

declare(strict_types=1);

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PostCodexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RssController;
use App\Http\Controllers\ThumbnailController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class);
Route::get('/about', AboutController::class);

Route::get('/book-detail/{slug}', BookDetailController::class);

Route::get('/blog/{slug}', PostController::class)
    // include dots and slahes as well
    ->where('slug', '.*');

Route::get('/blog', BlogController::class);
Route::get('/rss', RssController::class);
Route::get('/rss.xml', RssController::class);
Route::get('/contact', ContactController::class);

Route::get('/codex/posts', PostCodexController::class);

Route::get('/thumbnail/{title}.png', ThumbnailController::class);
