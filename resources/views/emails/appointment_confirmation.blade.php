
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>

    <p>Hello, {{ $recipientName }}!</p>

    @if ($isLawyer)
        <p>Your appointment with {{ $appointment->client_name }} on {{ $appointment->start_datetime }} has been booked successfully.</p>
    @else
        <p>Your appointment with the lawyer on {{ $appointment->start_datetime }} has been booked successfully.</p>
    @endif

    <p>Thank you for choosing our service.</p>
</body>
</html>