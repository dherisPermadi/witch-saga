<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quest;
use Carbon\Carbon;

class QuestController extends Controller
{
    public function index($chapter)
    {
        $view = 'quests.'.$chapter;
        return view($view);
    }

    public function solve(Request $request)
    {
        $quest = new Quest;
        $quest->answers[] = [
            'death_age' => $request->first_death_age,
            'death_year' => $request->first_death_year
        ];
        $quest->answers[] = [
            'death_age' => $request->last_death_age,
            'death_year' => $request->last_death_year
        ];

        $result = $quest->calculate();

        return ($result != -1) ? view('quests.success', ['average' => $result]) : view('quests.failed');
    }
}
