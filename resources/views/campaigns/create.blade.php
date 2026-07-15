@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white font-weight-bold">
                    {{ __('Create Phishing Campaign') }}
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('campaigns.store') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="subject" class="form-label font-weight-semibold">Email Subject</label>
                            <input type="text" 
                                   class="form-control @error('subject') is-invalid @enderror" 
                                   id="subject" 
                                   name="subject" 
                                   value="{{ old('subject') }}" 
                                   placeholder="e.g. Action Required: Update your password immediately" 
                                   required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phishing_link" class="form-label font-weight-semibold">Phishing Destination Link</label>
                            <input type="url" 
                                   class="form-control @error('phishing_link') is-invalid @enderror" 
                                   id="phishing_link" 
                                   name="phishing_link" 
                                   value="{{ old('phishing_link', url('/facebook-login')) }}" 
                                   placeholder="e.g. http://127.0.0.1:8000/facebook-login" 
                                   required>
                            <small class="form-text text-muted">The malicious URL that users will be redirected to when they click the link in the email.</small>
                            @error('phishing_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email_body" class="form-label font-weight-semibold">Email Body (HTML/Text)</label>
                            <textarea class="form-control @error('email_body') is-invalid @enderror" 
                                      id="email_body" 
                                      name="email_body" 
                                      rows="8" 
                                      placeholder="Dear user, we detected an unusual login attempt on your account..." 
                                      required>{{ old('email_body') }}</textarea>
                            @error('email_body')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('campaigns.index') }}" class="btn btn-outline-secondary">Back to Campaigns</a>
                            <button type="submit" class="btn btn-primary px-4">
                                Create Campaign
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
