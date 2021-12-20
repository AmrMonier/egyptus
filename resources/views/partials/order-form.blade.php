<div class="modal fade" id="order-form-{{ $trip->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>{{$trip->name}}</h5>
          <ul>
              <li>
                                                  <strong>Start date:</strong> {{ $trip->start_date }}
              </li>
              <li>
                  <strong>End date:</strong> {{ $trip->end_date }}
              </li>
              <li>
                  <strong>Available Seats: </strong> {{$trip->available_seats}}
              </li>
              <li>
                <span>Price: <strong>{{ $trip->price }}$</strong> / person</span>

              </li>
          </ul>
        </div>
        <div class="modal-footer" style="justify-content: flex-start">
            <form action="/trips/{{$trip->id}}/book" method="/post" style="display: block">
                <div class="input-group">
                    <input type="number" class="form-control mx-2" name="seats" value="1" max="{{$trip->available_seats}}">
                    <button type="submit" class="btn btn-success mx-2">Book</button>
                    <button type="button" class="btn btn-outline-danger mx-2" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>