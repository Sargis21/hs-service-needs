<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactUpdate(Request $request)
    {
        $request->validate([
            'title' => 'min:3|max:50',
            'text' => 'min:3|max:250',
        ]);

        Contact::first()->update($request->all());
        return back()->withSuccess('Success message');
    }

    public function contact()
    {
        return Response()->json(Contact::all());
    }
}
