<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <h1>A new Trip have been booked</h1>
    <p>
        the client {{ $client->name }} just booked {{ $order->seats }} seats for the trip with the ID:
        {{ $trip->id }} and name: {{$trip->name}} and paid: {{$order->price}} pound.
    </p>
    <div class="trip-details">
        <ul>
            <li>Name: {{$trip->name}}</li>
            <li>Provider: {{$trip->provider->name}}</li>
            <li>Start date: {{$trip->start_date}}</li>
            <li>End date: {{$trip->end_date}}</li>
        </ul>
        
    </div>
    <div class="cleint-details">
        <ul>
            <li>Name: {{$client->name}}</li>
            <li>Email: {{$client->email}}</li>
        </ul>
    </div>
    
</body>

</html>
