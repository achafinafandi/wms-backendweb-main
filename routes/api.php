<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LokasiBarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembelianDetailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
    return $request->user();
    // Produk Routes
    Route::get('produk', [ProdukController::class, 'index']);
    Route::get('produk/create', [ProdukController::class, 'create']);
    Route::post('produk', [ProdukController::class, 'store']);
    Route::get('produk/{id}', [ProdukController::class, 'show']);
    Route::get('produk/{id}/edit', [ProdukController::class, 'edit']);
    Route::put('produk/{id}', [ProdukController::class, 'update']);
    Route::delete('produk/{id}', [ProdukController::class, 'destroy']);

    // Kategori Routes
    Route::get('kategori', [KategoriController::class, 'index']);
    Route::get('kategori/create', [KategoriController::class, 'create']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::get('kategori/{id}', [KategoriController::class, 'show']);
    Route::get('kategori/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('kategori/{id}', [KategoriController::class, 'update']);
    Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

    // Lokasi Barang Routes
    Route::get('lokasi-barang', [LokasiBarangController::class, 'index']);
    Route::get('lokasi-barang/create', [LokasiBarangController::class, 'create']);
    Route::post('lokasi-barang', [LokasiBarangController::class, 'store']);
    Route::get('lokasi-barang/{id}', [LokasiBarangController::class, 'show']);
    Route::get('lokasi-barang/{id}/edit', [LokasiBarangController::class, 'edit']);
    Route::put('lokasi-barang/{id}', [LokasiBarangController::class, 'update']);
    Route::delete('lokasi-barang/{id}', [LokasiBarangController::class, 'destroy']);

    // Supplier Routes
    Route::get('supplier', [SupplierController::class, 'index']);
    Route::get('supplier/create', [SupplierController::class, 'create']);
    Route::post('supplier', [SupplierController::class, 'store']);
    Route::get('supplier/{id}', [SupplierController::class, 'show']);
    Route::get('supplier/{id}/edit', [SupplierController::class, 'edit']);
    Route::put('supplier/{id}', [SupplierController::class, 'update']);
    Route::delete('supplier/{id}', [SupplierController::class, 'destroy']);

    // Pembelian Routes
    Route::get('pembelian', [PembelianController::class, 'index']);
    Route::get('pembelian/create', [PembelianController::class, 'create']);
    Route::post('pembelian', [PembelianController::class, 'store']);
    Route::get('pembelian/{id}', [PembelianController::class, 'show']);
    Route::get('pembelian/{id}/edit', [PembelianController::class, 'edit']);
    Route::put('pembelian/{id}', [PembelianController::class, 'update']);
    Route::delete('pembelian/{id}', [PembelianController::class, 'destroy']);

    // Pembelian Detail Routes
    Route::get('pembelian-detail', [PembelianDetailController::class, 'index']);
    Route::get('pembelian-detail/create', [PembelianDetailController::class, 'create']);
    Route::post('pembelian-detail', [PembelianDetailController::class, 'store']);
    Route::get('pembelian-detail/{id}', [PembelianDetailController::class, 'show']);
    Route::get('pembelian-detail/{id}/edit', [PembelianDetailController::class, 'edit']);
    Route::put('pembelian-detail/{id}', [PembelianDetailController::class, 'update']);
    Route::delete('pembelian-detail/{id}', [PembelianDetailController::class, 'destroy']);

    // Penjualan Routes
    Route::get('penjualan', [PenjualanController::class, 'index']);
    Route::get('penjualan/create', [PenjualanController::class, 'create']);
    Route::post('penjualan', [PenjualanController::class, 'store']);
    Route::get('penjualan/{id}', [PenjualanController::class, 'show']);
    Route::get('penjualan/{id}/edit', [PenjualanController::class, 'edit']);
    Route::put('penjualan/{id}', [PenjualanController::class, 'update']);
    Route::delete('penjualan/{id}', [PenjualanController::class, 'destroy']);

    // Penjualan Detail Routes
    Route::get('penjualan-detail', [PenjualanDetailController::class, 'index']);
    Route::get('penjualan-detail/create', [PenjualanDetailController::class, 'create']);
    Route::post('penjualan-detail', [PenjualanDetailController::class, 'store']);
    Route::get('penjualan-detail/{id}', [PenjualanDetailController::class, 'show']);
    Route::get('penjualan-detail/{id}/edit', [PenjualanDetailController::class, 'edit']);
    Route::put('penjualan-detail/{id}', [PenjualanDetailController::class, 'update']);
    Route::delete('penjualan-detail/{id}', [PenjualanDetailController::class, 'destroy']);
});
