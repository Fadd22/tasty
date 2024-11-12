<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Messages;
use Illuminate\Http\Request;
use Alert;

class FrontController extends Controller
{
    public function store(Request $request)
    {
        // membuat validasi data
        $this->validate($request, [
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = new Messages();
        $message->subject = $request->subject;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        toast('Berhasil Terkirim','success');

        return view('contact');
    }
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function news()
    {
        return view('news');
    }
    public function contact()
    {
        return view('contact');
    }
        public function loadMore(Request $request){
        $skip = $request->input('skip', 0); // Get the current skip value
        $berita = Berita::orderBy('id', 'asc')->skip($skip)->take(8)->get(); // Load next 8 items

        return response()->json($berita);
    }
    public function more()
    {
        return view('more');
    }
}
