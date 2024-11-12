<?php

namespace App\Http\Controllers;

use Alert;
use Storage;
use Validator;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function index()
    {
        $message = Messages::all();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.message.index', compact('message'));
    }

    public function create()
    {
        return view('admin.message.create');
    }


   // In MessagesController.php
public function store(Request $request)
{
    // Validation rules
    $request->validate([
        'subject' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Save message and provide feedback
    try {
        Messages::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to send message. Please try again later.');
    }
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
        $message = Messages::findOrFail($id);
        return view('admin.message.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = Messages::findOrFail($id);
        $message->subject = $request->subject;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(5000);
        return redirect()->route('message.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete Contact
        $message = Messages::findOrFail($id);
        $message->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('message.index');

    }
}

