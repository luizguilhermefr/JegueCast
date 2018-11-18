<?php

use Illuminate\Support\Facades\Route;

Route::view('/{any}', 'main')->where('any', '.*');
