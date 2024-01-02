<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class PlayController extends Controller
{
    public function index(): View
    {
        return view('play.index');
    }
}
