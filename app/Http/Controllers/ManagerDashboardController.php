<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ManagerDashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::where('manager_id', Auth::id());
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%'.$request->search.'%')
                  ->orWhere('location', 'like', '%'.$request->search.'%');
            });
        }
        $assignedProjects = $query->paginate(10);
        return view('manager-dashboard', compact('assignedProjects'));
    }
} 