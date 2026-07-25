@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Edit Campaign</h2>

    <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Email Subject</label>

            <input
                type="text"
                name="subject"
                class="form-control"
                value="{{ old('subject', $campaign->subject) }}"
                required>
        </div>

        <div class="mb-3">
            <label>Phishing Destination Link</label>

            <input
                type="url"
                name="phishing_link"
                class="form-control"
                value="{{ old('phishing_link', $campaign->phishing_link) }}"
                required>
        </div>

        <div class="mb-3">
            <label>Email Body</label>

            <textarea
                name="email_body"
                class="form-control"
                rows="5"
                required>{{ old('email_body', $campaign->email_body) }}</textarea>
        </div>

        <button class="btn btn-success">
            Update Campaign
        </button>

        <a href="{{ route('campaigns.index') }}"
           class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection
