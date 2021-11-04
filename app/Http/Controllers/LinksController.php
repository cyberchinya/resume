<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function show ()
    {
        return view('links.show');
    }
    public function send (LinkRequest $request)
    {
        $url = $request->input('url');
    }
}
