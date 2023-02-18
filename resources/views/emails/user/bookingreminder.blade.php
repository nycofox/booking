<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Din kommende booking {{ $booking->start_time->format('d.m.Y') }}</title>
</head>
<body>
<h1>Hei {{ $user->first_name }},</h1>
<p>Vi vil bare minne deg om at du har en reservert plass hos oss på Funkybooking i dag
    ({{ $booking->start_time->format('d.m.Y') }}).</p>
<p>Du har plass <strong>{{ $booking->seat->name }}</strong> på <strong>{{ $booking->room->name }}</strong> i dag fra
    <strong>{{ $booking->start_time->format('H:i') }}</strong> til
    <strong>{{ $booking->end_time->format('H:i') }}</strong>.</p>
<p>Hvis du ikke kan komme i dag, må du huske å avbestille bookingen, dette kan gjøres via nettsidene.</p>
<p>Med vennlig hilsen,<br>
    {{ config('app.name') }}</p>
</body>
</html>
