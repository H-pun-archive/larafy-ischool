<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function myself(Request $request)
    {
        return Inertia::render('User/Index', [
            'user' => $request->user(),
            'team' => $request->user()->currentTeam,
        ]);
    }
}
