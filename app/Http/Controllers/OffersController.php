<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class OffersController extends Controller
{

    public function __invoke()
    {
        $packages = Package::query()->get();
        return view('pages.package', compact('packages'));
    }
}
