<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('pegawai', PegawaiController::class);
