<?php

namespace App\Http\Controllers;

Use Alert;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Menampilkan data Galery
        $gallery = Gallery::latest()->paginate(5);
        confirmDelete("Delete", "Are you sure you want to delete?");
        return view('admin.gallery.index', compact('gallery'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Redirect to page add data Galery
        // $gallery = Gallery::all();
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data
    $validatedData = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg', // Validasi untuk image
        'slider' => 'required|image|mimes:jpeg,png,jpg', // Validasi untuk slider
    ]);

    // Proses upload untuk image
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension(); // Nama file dengan timestamp
        $image->move(public_path('storage/gallery'), $imageName); // Menyimpan file di folder public/storage/gallery
    }

    // Proses upload untuk slider
    if ($request->hasFile('slider') && $request->file('slider')->isValid()) {
        $slider = $request->file('slider');
        $sliderName = time() . '.' . $slider->getClientOriginalExtension(); // Nama file slider dengan timestamp
        $slider->move(public_path('storage/slider'), $sliderName); // Menyimpan file slider
    }

    // Simpan data ke database
    $gallery = new Gallery();
    $gallery->image = $imageName; // Menyimpan nama file image
    $gallery->slider = $sliderName; // Menyimpan nama file slider
    $gallery->save();

    // Mengirimkan pesan sukses
    Alert::success('Success', 'Data berhasil disimpan')->autoClose(2000);

    return redirect()->route('gallery.index');
}

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //redirect ke halaman Update
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //MengUpdate data Galery
        $this->validate($request, [
            'image' => 'required',
            'slider' => 'required',
        ]);

        $gallery = Gallery::findOrFail($id);
        $images = $request->file('image');
        $images->storeAs('public/gallery', $images->hashName());
        Storage::delete('public/gallery/' . $gallery->images);
        $gallery->image = $images->hashName();
        $slider = $request->file('slider');
        $slider->storeAs('public/gallery', $slider->hashName());
        Storage::delete('public/gallery/' . $gallery->slider);
        $gallery->slider = $slider->hashName();
        $gallery->save();
        Alert()->success('Success', 'Data Berhasil Di Edit')->autoClose(2000);
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Delete data Galery
        $gallery = Gallery::findOrFail($id);
        Storage::delete('public/gallery/' . $gallery->image);
        Storage::delete('public/gallery/' . $gallery->slider);
        $gallery->delete();
        Alert::toast('Succes', 'Data successfully deleted')->success('Succes', 'Data successfully deleted');

        return redirect()->route('gallery.index');
    }
}
