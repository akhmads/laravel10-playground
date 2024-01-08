<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Note;

class TestController extends Controller
{
    public function index(): View
    {
        dd( Note::whereDateBetween('2024-01-01','2024-01-06')->get()->toArray() );
    }
}
