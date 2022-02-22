<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/', function () {
    return view('welcome');
});

// Test Redis
Route::get('/store', function() {
    Redis::set('Bangkok', 'Krung Thep Maha Nakhon');
});

Route::get('/retrieve', function() {
    return Redis::get('Bangkok');
});

// Test Mailhog
Route::get('/send-email', function() {
    Mail::to('samit@itgeniussite.dev')->send(new TestMail);
});