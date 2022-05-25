<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your reservation</title>
</head>

<body>
    <h1>{{ $details['title'] }}</h1>
    <h1>{{ $details['body'] }}</h1>
    <h1>ID: {{ $details['id'] }}</h1>
    <h1>Name: {{ $details['client_name'] }}</h1>
    <h1>Phone: {{ $details['phone'] }}</h1>
    <h1>Email: {{ $details['email'] }}</h1>
    <h1>CMND: {{ $details['cmnd'] }}</h1>
    <h1>Payment method: {{ $details['payment'] }}</h1>
    <h1>Room category: {{ $details['category_name'] }}</h1>
    <h1>Room: {{ $details['room_name'] }}</h1>
    <h1>Number of adults: {{ $details['number_of_adults'] }}</h1>
    <h1>Number of children: {{ $details['number_of_children'] }}</h1>
    <h1>Check-in: {{ $details['checkin'] }}</h1>
    <h1>Check-out: {{ $details['checkout'] }}</h1>
    <h1>Price: {{ $details['price'] }}</h1>
    <h1>Time create: {{ $details['created_at'] }}</h1>
    <h1>Total time use room:{{ $details['time'] }}</h1>
</body>

</html>
