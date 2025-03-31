<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); // Lấy thông tin liên hệ đầu tiên
        return view('admin.contacts.index', compact('contacts'));
    }
    public function create()
    {
        return view('admin.contacts.create');
    }
    public function store(Request $request)
    {
        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Liên hệ đã được thêm thành công.');
    }
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Liên hệ đã được cập nhật thành công.');
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Liên hệ đã được xóa thành công.');
    }

}
