<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $products = Products::paginate(10); // Sesuaikan jumlah produk per halaman
        return view('kontak', compact('products'));    }
}