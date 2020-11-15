<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmailController extends Controller
{
    public function email (Request $request)
    {

        // $request->validate([
        //     'name' => 'min:3|max:50',
        //     'email' => 'min:3|max:50',
        //     'text' => 'min:3|max:250'
        // ]);

        Email::create($request->all());
        return Response()->json('ok');
    }

    public function deleteEmail (Request $request) {
        Email::find($request->id)->delete();
        return back()->withSuccess('Success message');
    }
}
