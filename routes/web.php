<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/database', function () {
    return view('database', [
        'entries' => \App\Models\Entry::all(),
    ]);
})->name('database');

Route::get('/database/new', function () {
    $entry = new \App\Models\Entry();
    $entry->save();

    return redirect()->route('database');
})->name('database.new');

Route::get('/cache', function () {
    $lastUpdated = Cache::get('last_updated', 'never');
    return view('cache', compact('lastUpdated'));   
})->name('cache');

Route::get('/cache/update', function () {
    Cache::put('last_updated', now());
    return redirect()->route('cache');
})->name('cache.update');

Route::get('/queue', function () {
    $queueUpdate = Cache::get('queue_update', 'never');
    return view('queue', compact('queueUpdate'));
})->name('queue');

Route::get('/queue/update', function () {
    \App\Jobs\QueueJob::dispatch();
    return redirect()->route('queue');
})->name('queue.update');