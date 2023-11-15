<?php

namespace App\Http\Controllers;

use App\Models\Filemasuk;
use App\Models\Suratmasuk;
use App\Models\Perihal;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suratmasuk', [
            'title' => 'suratmasuk',
            'perihal' => Perihal::all(),
            'suratmasuk' => Suratmasuk::all(),
            'file'      => Filemasuk::with('suratmasuk')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request-> validate([
            'tanggal' => 'required',
            'pengirim' => 'required',
            'perihal_id' => 'required',
            'file' => 'required',
        ]);
        Suratmasuk::create($data);

        $file = Suratmasuk::latest()->first();
        $files = $request->file('file');

        foreach ($files as $multifiles) {
            if ($request->hasfile('file')) {
                $nama = hexdec(uniqid());
                $ekstensi = strtolower($multifiles->getClientOriginalExtension());
                $filenamesave = $nama.'.'.$ekstensi;
                $multifiles->move('file_suratmasuk', $filenamesave);
                Filemasuk::create([
                    'suratmasuk_id' =>$file->id,
                    'file' =>$filenamesave
                ]);
            }
        }
        return redirect('/suratmasuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
