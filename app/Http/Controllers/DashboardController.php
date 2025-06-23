<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Evaluation;
use App\Models\Note;
use App\Models\Role;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::with(['role', 'studiedClassroom', 'taughtClassrooms'])->get();
        return view('admin.dashboard.index', [
            'users' => $users,
            'classrooms' => Classroom::select('id'),
            'evaluations' => Evaluation::select('id'),
            'notes' => Note::select('id'),
            'roles' => Role::select('id'),
        ]);
    }
}
