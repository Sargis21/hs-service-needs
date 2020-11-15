<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceUpdate (Request $request)
    {
        $request->validate([
            'title' => 'min:3|max:50',
            'text' => 'min:3|max:250',
            'img' => 'image'
        ]);

        if ($request->img == null) {
            $imageName = Service::find($request->id)->img;
        } else {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('img'), $imageName);
        }
        
            
        Service::find($request->id)->update([
            'img' => $imageName,
            'title' => $request->title,
            'text' => $request->text
        ]);
        return back()->withSuccess('Success message');
    }

    public function service()
    {
        return Response()->json(service::all());
    }
}
