<?php

namespace App\Http\Controllers;

use App\Models\Filemasuk;
use App\Models\Perihal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function beranda() {
        return view('beranda', [
            'title' => 'beranda'
        ]);
    }

    public function suratkeluar() {
        return view('suratkeluar', [
            'title' => 'suratkeluar',
            
        ]);
    }

    public function profile() {
        return view('profile', [
            'title' => 'profile'
        ]);
    }

    public function laporan() {
        return view('laporan', [
            'title' => 'laporan'
        ]);
    }

    public function download($id)
    {
        $file = Filemasuk::findOrFail($id);

        $path = storage_path('app/' . $file->path);

        return response()->download($path, $file->file);
    }
}
