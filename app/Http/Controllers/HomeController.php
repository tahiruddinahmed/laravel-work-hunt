<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index', [
            'jobs' => JobListing::latest()->take(15)->get()
        ]);;
    }
}
