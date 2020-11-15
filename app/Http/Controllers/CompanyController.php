<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function companyName () 
    {
        return Response()->json(['companyName' => Company::first()]);
    }

    public function companyNameUpdate (Request $request) {

        $request->validate([
            'name' => 'min:3|max:50',
        ]);
        
        Company::first()->update(['name' => $request->name]);
        return back()->withSuccess('Success message');
    }
}
