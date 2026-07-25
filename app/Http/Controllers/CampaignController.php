<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Mail\CampaignMail;
use Illuminate\Support\Facades\Mail;

class CampaignController extends Controller
{
    public function index(): View
    {
        return view('campaigns.index', ['campaigns' => Campaign::latest()->get()]);
    }
    
    public function create(): View
    {
        return view('campaigns.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'subject' => 'required',
            'recipient_email' => 'required|email',
            'email_body' => 'required',
            'phishing_link' => 'required|url',
        ]);
        
        $campaign = Campaign::create($request->all());
        Mail::to($campaign->recipient_email)->send(new CampaignMail($campaign));

        return redirect()->route('campaigns.index')->with('success', 'Campaign created successfully!');
    }

    public function show(Campaign $campaign)
    {
        return view('campaigns.show', compact('campaign'));
    }

    public function edit(Campaign $campaign): View
    {
        return view('campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, Campaign $campaign): RedirectResponse
    {
        $request->validate([
            'subject' => 'required',
            'recipient_email' => 'required|email',
            'email_body' => 'required',
            'phishing_link' => 'required|url',
        ]);

        $campaign->update([
            'subject' => $request->subject,
            'recipient_email' => $request->recipient_email,
            'email_body' => $request->email_body,
            'phishing_link' => $request->phishing_link,
        ]);

        return redirect()
            ->route('campaigns.index')
            ->with('success', 'Campaign updated successfully!');
    }

    public function destroy(Campaign $campaign): RedirectResponse
    {
        $campaign->delete();

        return redirect()
            ->route('campaigns.index')
            ->with('success', 'Campaign deleted successfully!');
    }
}
