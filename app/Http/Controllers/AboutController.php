<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutPage ()
    {

    }
    public function aboutUpdate(Request $request)
    {
        $request->validate([
            'title' => 'min:3|max:50',
            'about_1' => 'min:3|max:250',
            'about_2' => 'min:3|max:250',
            'about_3' => 'min:3|max:250',
            'about_4' => 'min:3|max:250',
        ]);

        About::first()->update($request->all());
        return back()->withSuccess('Success message');
    }

    public function about ()
    {
        return Response()->json(About::all());
    }
}
