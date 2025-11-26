<?php
use Illuminate\Support\Facades\Route;

Route::get('/login', [Auth\LoginController::class, 'login']);
Route::resource('accounts', AccountController::class);
Route::resource('customers', CustomerController::class);
Route::resource('invoices', InvoiceController::class);
