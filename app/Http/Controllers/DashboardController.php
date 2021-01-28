<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $items = News::all(); //Fungsi untuk mengambil seluruh data pada tabel newss

        return view('dashboard.index', compact('items')); //Redirect ke halaman news/index.blade.php dengan membawa data news tadi
    }

    public function create()
    {
        return view('dashboard.create'); //Redirect ke halaman news/create.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', //nama form "title" harus diisi (required)
            'deskripsion' => 'required', //nama form "writer" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        News::create($request->all()); //Fungsi untuk menyimpan data inputan kita

        return redirect()->route('dashboard.index')
            ->with('success', 'news created successfully.'); //Redirect ke halaman news/index.blade.php dengan pesan success
    }

    public function show($id)
    {
        $items = News::findOrFail($id);
        return view('dashboard.detail', compact('items')); //Redirect ke halaman news/detail.blade.php dengan membawa data news sesuai ID yang dipilih
    }

    public function edit($id)
    {
        $items = News::findOrFail($id);
        return view('dashboard.edit', compact('items')); //Redirect ke halaman news/edit.blade.php dengan membawa data news sesuai ID yang dipilih
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required', //nama form "title" harus diisi (required)
            'deskripsion' => 'required', //nama form "writer" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar
        $items = News::findOrFail($id);
        $items->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        return redirect()->route('dashboard.index')
            ->with('success', 'news updated successfully'); //Redirect ke halaman news/index.blade.php dengan pesan success
    }

    public function destroy($id)
    {
        $items = News::findOrFail($id);
        $items->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('dashboard.index')
            ->with('success', 'news deleted successfully'); //Redirect ke halaman news/index.blade.php dengan pesan success
    }
}
