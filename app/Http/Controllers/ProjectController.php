<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ActivityLog;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Project::query();
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }
        $projects = $query->paginate(10);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function dashboard()
    {
        $ongoing = Project::where('status', 'ongoing')->count();
        $completed = Project::where('status', 'completed')->count();
        $pending = Project::where('status', 'pending')->count();
        $delayed = Project::where('status', 'delayed')->count();

        $activityLogs = ActivityLog::with(['user', 'project'])->latest()->take(10)->get();

        return view('dashboard', compact('ongoing', 'completed', 'pending', 'delayed', 'activityLogs'));
    }
}
