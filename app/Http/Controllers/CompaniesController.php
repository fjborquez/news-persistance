<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function get($id)
    {
        return Company::find((int)$id);
    }

    public function post(Request $request)
    {
        return Company::create([
            'id' => (int)$request->input('id'),
            'name' => $request->input('name'),
            'ticker' => $request->input('ticker')
        ]);
    }
}
