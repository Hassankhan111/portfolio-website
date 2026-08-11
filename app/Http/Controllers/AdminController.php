<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use View;

class AdminController extends Controller
{
    public function index()
    {
      $Contacts = Contact::latest()->paginate(10);
      return View('dashboard.admin', compact('Contacts'));
    }


    public function getuser(string $id)
   {
    $data = Contact::findOrFail($id);

    $Contacts = Contact::latest()->paginate(10);

    return view('dashboard.showuser', compact('data', 'Contacts'));
  }


 public function destroy(string $id)
{
    $contact = Contact::findOrFail($id);

    $contact->delete();

    return redirect('/admin')->with('success', 'Message deleted successfully.');
}


// Mark message as read
    public function markAsRead(string $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->status = 'read';
        $contact->save();

        return redirect()->back()->with('success', 'Message marked as read.');
    }

}