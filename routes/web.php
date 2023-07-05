<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'role:admin'])->name('admin.')->prefix('admin')->group(function (){
    Route::view('/', 'admin.index')->name('index');
    Route::resource('/roles', RoleController::class);
    Route::get('roles/assign/permission/form/{role}',[RoleController::class,'assignPermissionForm'])->name('roles.assign.permission.form');
    Route::post('roles/assign/permission/{role}',[RoleController::class,'assignPermission'])->name('roles.assign.permission');
    Route::resource('/permissions', PermissionController::class);
    Route::get('permissions/assign/permission/form/{permission}',[PermissionController::class,'assignRoleForm'])->name('permissions.assign.role.form');
    Route::post('permissions/assign/permission/{permission}',[PermissionController::class,'assignRole'])->name('permissions.assign.role');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
