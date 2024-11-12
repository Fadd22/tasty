<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kontak;
use Illuminate\Http\Request;

use Storage;

class KontakController extends Controller
{

    public function index()
    {
        $kontak = Kontak::all();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.kontak.index', compact('kontak'));
    }

    public function create()
    {
        return view('admin.kontak.create');
    }

    public function store(Request $request)
    {
        // membuat validasi data
        $this->validate($request, [
            'email' => 'required',
            'no_telp' => 'required|min:12',
            'alamat' => 'required',
        ]);

        $kontak = new Kontak();
        $kontak->email = $request->email;
        $kontak->no_telp = $request->no_telp;
        $kontak->alamat = $request->alamat;
        $kontak->save();
        Alert::success('Success', "Pesan Berhasil Terkirim");
        return redirect()->route('kontak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [

            'email' => 'required',
            'no_telp' => 'required|min:12',
            'alamat' => 'required',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->email = $request->email;
        $kontak->no_telp = $request->no_telp;
        $kontak->alamat = $request->alamat;
        $kontak->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(5000);
        return redirect()->route('kontak.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete Contact
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('kontak.index');

    }
}
