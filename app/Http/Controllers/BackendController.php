<?php

namespace App\Http\Controllers;

use \App\League;
use App\Team;
use App\Match;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Match_;

class BackendController extends Controller
{
    public function dashboard($value = '')
    {
        return view('dashboard');
        // $leagues = League::orderBy('id', 'desc')->get();
        // dd($posts);
        // return view('dashboard', compact('leagues'));
    }
    


}
