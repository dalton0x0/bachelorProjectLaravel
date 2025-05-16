<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::with(['role', 'studiedClassroom', 'taughtClassrooms'])->get();
        return view('admin.home.index', ['users' => $users]);
    }
}
