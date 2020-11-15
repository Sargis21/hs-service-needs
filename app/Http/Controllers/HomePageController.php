<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage () 
    {
        return Response()->json(HomePage::all());
    }

    public function homeDataUpdate (Request $request)
    {
        $request->validate([
            'title' => 'min:3|max:50',
            'text_1' => 'min:3|max:250',
            'text_2' => 'min:3|max:250',
        ]);

        HomePage::first()->update($request->all());
        return back()->withSuccess('Success message');
    }
}
