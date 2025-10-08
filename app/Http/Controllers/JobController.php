<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobListing::with('category')->when(request('search'), function($query) {
                $query->search(request('search'));
            })->when(request('min_salary'), function($query) {
                $query->where('salary', '>=', request('min_salary'));
            })->when(request('max_salary'), function($query) {
                $query->where('salary', '<=', request('max_salary'));
        });

        // $jobListings = $jobs->paginate(); 

        return view('jobs.index', [
            'jobs' => $jobs->paginate()
        ]);
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
    public function show(JobListing $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
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
}
