<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function all(Request $request)
    {
        $date_filter = $request->date;

        if (empty($date_filter))
        {
            return News::scan();
        }

        return News::all()->whereBetween('created_at', [$date_filter . ' 00:00:00', $date_filter . ' 23:59:59']);
    }

    public function get($id)
    {
        return News::find($id);
    }

    public function post(Request $request)
    {
        $exists = News::all()->where('title', $request->input('title'))
                    ->where('date', $request->input('date'))->count() > 0;

        if ($exists)
        {
            abort(500);
        }

        return News::create([
            'id' => (int)date('YmdHisu'),
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'body' => $request->input('body'),
            'url' => $request->input('url'),
            'site' => $request->input('site'),
            'companies' => $request->input('companies', [])
        ]);
    }
}
