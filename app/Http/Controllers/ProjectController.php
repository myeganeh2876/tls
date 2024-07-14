<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __invoke()
    {
        return view('pages.services');
    }

    public function single(Request $request, Service $service)
    {
        return view('pages_single_service', compact('service'));
    }
}
