@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Campaign Details</h2>

    <hr>

    <div class="card">

        <div class="card-body">

            <h4>Email Subject</h4>
            <p>{{ $campaign->subject }}</p>

            <hr>

            <h4>Phishing Destination Link</h4>
            <p>{{ $campaign->phishing_link }}</p>

            <hr>

            <h4>Email Body</h4>
            <p>{{ $campaign->email_body }}</p>

            <hr>

            <h4>Created At</h4>
            <p>{{ $campaign->created_at }}</p>

        </div>
    </div>

    <br>

    <a href="{{ route('campaigns.index') }}" class="btn btn-primary">
        Back to Campaign List
    </a>

</div>

@endsection