@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Campaigns</h1>
        <a href="{{ route('campaigns.create') }}" class="btn btn-primary">Create Campaign</a>
        <ul class="list-group mt-3">

            @foreach ($campaigns as $campaign)

                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <div>
                        <strong>{{ $campaign->subject }}</strong>
                    </div>

                    <div>

                        <a href="{{ route('campaigns.show', $campaign->id) }}"
                        class="btn btn-info btn-sm">
                            View
                        </a>

                        <a href="{{ route('campaigns.edit', $campaign->id) }}"
                        class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('campaigns.destroy', $campaign->id) }}"
                            method="POST"
                            style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this campaign?')">

                                Delete

                            </button>

                        </form>

                    </div>

                </li>

            @endforeach

        </ul>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
           {{ session('success') }}
        </div>
    @endif
@endsection
