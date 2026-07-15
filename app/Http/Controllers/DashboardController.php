<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhishingLogs;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View{
        return view('phishing.dashboard', [
            'logs' => PhishingLogs::latest()->get()
        ]);
    }
}

