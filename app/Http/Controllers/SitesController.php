<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function get($id)
    {
        return Site::find((int)$id);
    }

    public function post(Request $request)
    {
        return Site::create([
            'id' => (int)$request->input('id'),
            'name' => $request->input('name'),
            'url' => $request->input('url')
        ]);
    }
}
