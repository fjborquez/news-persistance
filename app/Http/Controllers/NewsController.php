<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function get($id)
    {
        return News::find((int)$id);
    }

    public function post(Request $request)
    {
        return News::create([
            'id' => (int)$request->input('id'),
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'body' => $request->input('body'),
            'url' => $request->input('url')
        ]);
    }
}
