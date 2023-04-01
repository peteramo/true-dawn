<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\Pages\Contact;
use App\Models\StaticPages;
use Illuminate\Http\Request;

class ContactusAdminController extends Controller
{
    public function returnInfo()
    {
        $page = Pages::find(5);
        return view('admin.pages.contactus',compact('page'));
    }

    public function updateInfo(Request $request)
    {
        $contact = Contact::find(1);
        $contact->con_email = $request->email;
        $contact->con_email2 = $request->email2;
        $contact->con_phone = $request->phone;
        $contact->con_phone2 = $request->phone2;
        $contact->con_mobile = $request->mobile;
        $contact->con_fax = $request->fax;
        $contact->con_address = $request->address;
        $contact->con_fax = $request->fax;
        $contact->con_postcode = $request->postcode;

        $contact->con_facebook = $request->facebook;
        $contact->con_twitter = $request->twitter;
        $contact->con_instagram = $request->instagram;
        $contact->con_skype = $request->skype;
        $contact->con_linkedin = $request->linkedin;
        $contact->save();

        return redirect()->back()->withSuccess('Contactus info updated successfully');
    }
}
