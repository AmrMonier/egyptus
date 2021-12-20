<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <h1>A new Trip have been booked</h1>
    <p>
        the client <strong>{{ $client->name }}</strong> just booked <strong>{{ $order->seats }}</strong> seats for the trip with the ID:
        <strong>{{ $trip->id }}</strong> and name: <strong>{{$trip->name}}</strong> and paid: <strong>{{$order->price}}</strong> pound.
    </p>
    <div class="trip-details">
        <h3>Trip Details</h3>
        <ul>
            <li>Name: {{$trip->name}}</li>
            <li>Provider: {{$trip->provider->name}}</li>
            <li>Start date: {{$trip->start_date}}</li>
            <li>End date: {{$trip->end_date}}</li>
        </ul>
        
    </div>
    <div class="cleint-details">
        <h3>Client details</h3>
        <ul>
            <li>Name: {{$client->name}}</li>
            <li>Email: {{$client->email}}</li>
        </ul>
    </div>
    
</body>

</html>
