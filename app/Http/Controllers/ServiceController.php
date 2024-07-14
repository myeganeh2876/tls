<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __invoke()
    {
        $services = Service::query()->get();
        return view('pages.services', compact('services'));
    }

    public function single(Request $request, Service $service)
    {
        return view('pages.single_service', compact('service'));
    }
}
