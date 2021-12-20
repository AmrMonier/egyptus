@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.flash-msgs')
        <ul class="list-group">
            @foreach ($trips as $trip)
                <li class="list-group-item my-2" style="position: relative">
                    <h4>{{ $trip->name }}</h4>
                    <div>
                        <span>Price: <strong>{{ $trip->price }}$</strong> / person</span>
                        <br>
                        <span>Available seats: <strong>{{ $trip->available_seats }}</strong> of
                            {{ $trip->seats }}</span>
                    </div>
                    <div>
                        <a class="me-3" data-bs-toggle="collapse" href="#program-{{ $trip->id }}" role="button"
                            aria-expanded="false" aria-controls="program-{{ $trip->id }}">
                            Program
                        </a>
                        <a data-bs-toggle="collapse" href="#details-{{ $trip->id }}" role="button" aria-expanded="false"
                            aria-controls="details-{{ $trip->id }}">
                            Details
                        </a>

                    </div>
                    <div class="collapse my-1" id="program-{{ $trip->id }}">
                        <div class="card card-body">
                            <h5>Program</h5>
                            <p>
                                {{ $trip->program }}
                            </p>
                        </div>
                    </div>
                    <div class="collapse" id="details-{{ $trip->id }}">
                        <div class="card card-body">
                            <h5>details</h5>
                            <div>
                                <strong>Start date:</strong> {{ $trip->start_date }}
                                <strong>End date:</strong> {{ $trip->end_date }}
                            </div>
                            <p class="lead">
                                {{ $trip->details }}
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#order-form-{{ $trip->id }}" style="position: absolute; right: 10px; bottom: 10px">
                        Book your Seat
                    </button>
                    @include('partials.order-form')
                </li>

            @endforeach
        </ul>
        {{ $trips->links() }}
    </div>
@endsection
