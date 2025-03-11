<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function show() {
        $contact = Contact::first(); // Lấy thông tin liên hệ đầu tiên
        return view('admin.contacts.show', compact('contact'));
    }

    public function edit() {
        $contact = Contact::first();
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|url',
        ]);

        $contact = Contact::first();
        $contact->update($request->all());
        return redirect()->route('contacts.show')->with('success', 'Thông tin liên hệ đã được cập nhật!');
    }
}
