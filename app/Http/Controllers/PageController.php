<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Tobiasla78\FilamentSimplePages\Models\SimplePage;

class PageController extends Controller
{

    public function __invoke(Request $request, $slug)
    {
        $page = SimplePage::query()->where('slug', $slug)->firstOrFail();
        return view('pages.page', compact('page'));
    }
}
