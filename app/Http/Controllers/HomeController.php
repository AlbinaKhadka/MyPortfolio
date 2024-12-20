<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Skill;
class HomeController extends Controller
{
    public function index(){

        $services = Service::all();
        $skills = Skill::all();
        return view('Home', compact('services','skills'));
    }
}
