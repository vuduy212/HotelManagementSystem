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

    {{-- 1. Thong tin khach hang --}}
    <br>
    <h2>Client Information</h2>
    <p>Name: {{ $details['client_name'] }}</p>
    <p>Phone: {{ $details['phone'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>CMND: {{ $details['cmnd'] }}</p>

    {{-- 2. Thong tin don dat phong --}}
    {{-- <p>ID: {{ $details['id'] }}</p> --}}
    <br>
    <h2>Reservation Information</h2>
    <p>Room category: {{ $details['category_name'] }}</p>
    <p>Room: {{ $details['room_name'] }}</p>
    <p>Number of adults: {{ $details['number_of_adults'] }}</p>
    <p>Number of children: {{ $details['number_of_children'] }}</p>
    <p>Check-in: {{ $details['checkin'] }}</p>
    <p>Check-out: {{ $details['checkout'] }}</p>
    <p>Time create: {{ $details['created_at'] }}</p>

    {{-- 3. Thong tin don gia --}}
    <br>
    <h2>Payment Information</h2>
    <p>Total time use room: {{ $details['time'] }} day</p>
    <p>Price: {{ $details['price'] }} $</p>
    <p>Payment method: {{ $details['payment'] }}</p>

    {{-- 4. Thong tin lien he --}}
    <br>
    <h2>Contact information</h2>
    <p>Hotel: Paradise Tam Dao</p>
    <p>Address: 3/81/79 Cau Giay, Ha Noi</p>
    <p>Phone: +84 96 777 5035</p>
    <p>Email: vuduy0212@gmail.com</p>

    {{-- 5. Loi cam on --}}
    <br>
    <h1>Thanks and Best Regards !</h1>
</body>

</html>
