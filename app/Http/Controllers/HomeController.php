<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonal;
use Illuminate\Http\Request;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class HomeController extends Controller
{

    public function __invoke()
    {

        $projects = Project::query()->get();
        $services = Service::query()->get();
        $testimonals = Testimonal::query()->with('project')->get();

        return view('pages.home', compact('projects', 'services', 'testimonals'));
    }
}
