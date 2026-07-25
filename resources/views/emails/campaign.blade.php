<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $campaign->subject }}</title>
</head>
<body>

<h2>{{ $campaign->subject }}</h2>

<p>
    {!! nl2br(e($campaign->email_body)) !!}
</p>

<p>
    <a href="{{ $campaign->phishing_link }}"
       style="background:#1877f2;color:white;padding:10px 20px;
       text-decoration:none;border-radius:5px;">
        Click Here
    </a>
</p>

<p>
    This is a phishing awareness simulation.
</p>

</body>
</html>