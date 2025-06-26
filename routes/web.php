<?php

Route::get('/', function () {
    return view('home');
});

use App\Models\Contact;
use Illuminate\Http\Request;

Route::get('/', function () {
    $contacts = Contact::latest()->get();
    return view('home', compact('contacts'));
});

Route::post('/contact', function (Request $request) {
    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return redirect('/#contact')->with('success', 'Pesan berhasil dikirim!');
});

Route::delete('/contact/{id}', function ($id) {
    Contact::destroy($id);
    return redirect('/#contact')->with('success', 'Pesan berhasil dihapus!');
});
