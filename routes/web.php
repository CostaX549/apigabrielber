<?php

use App\Events\TestingReverbEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    foreach(range(1,60) as $i) {
        TestingReverbEvent::dispatch($i);
      }
    return view('welcome');
});
