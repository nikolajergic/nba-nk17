<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function index() {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show(Team $team) {      

        return view('teams.show', compact('team'));
    }
}
