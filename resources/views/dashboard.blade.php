@extends('layouts.home')

@section('content')




<div class="bg-white p-4  fill-screen d-flex justify-content-center align-items-center">


    <div class="card pt-4 mt-5 z-3 w-50" style="">
        <div class="card-body">
          <h2 class="card-title mb-4">Generate Track ID</h2>
          <form method="POST" action="{{route('generate_id')}}">
            

            @csrf
        <fieldset>
          
            <div class="row mb-3">
                <label for="type" class="col-sm-12 col-form-label">Name of Item</label>
                <div class="col-sm-12">
                 <input type="text" class="form-control" name="name_of_item" required />
                </div>
              </div>
          <div class="row mb-3">
            <label for="type" class="col-sm-12 col-form-label">Type</label>
            <div class="col-sm-12">
              <select class="form-control" name="type" required>

                <option>Packed and Sealed </option>
                <option> Private </option>

              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="mode" class="col-sm-12 col-form-label">Mode</label>
            <div class="col-sm-12">
                <select class="form-control" name="mode" required>

                    <option>Air </option>
                    <option> Road </option>
                    <option> Sea </option>
                    <option> Courier </option>
    
                  </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="status" class="col-sm-12 col-form-label">Status</label>
            <div class="col-sm-12">
                <select class="form-control" name="status" required>

                    <option>Canceled</option>
                    <option>Delivered</option>
                    <option>On Transit</option>
                    <option>Pending</option>
                    <option>Shipped</option>
                    <option>Out for Delivery</option>
                    <option>Delayed</option>
    
                  </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="pieces" class="col-sm-12 col-form-label">Pieces</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="pieces" name="pieces" required >
            </div>
          </div>
          <div class="row mb-3">
            <label for="weight" class="col-sm-12 col-form-label">Weight(KG)</label>
            <div class="col-sm-12">
              <input type="number" class="form-control" id="weight"  name="weight">
             
            </div>
          </div>
          <div class="row mb-3">
            <label for="cubic" class="col-sm-12 col-form-label">Cubic (CB)</label>
            <div class="col-sm-12">
              <input type="number" class="form-control" id="cubic"  name="cubic">
            </div>
          </div>
          <div class="row mb-3">
            <label for="startDate" class="col-sm-12 col-form-label">Start Date</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="date" name="start_date" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="arrivalDate" class="col-sm-12 col-form-label">Arrival Date</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="date" name="arrival_date" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="sender" class="col-sm-12 col-form-label">Sender</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="sender" name="sender"  required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="origin" class="col-sm-12 col-form-label">Package Origin</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="origin" name="package_origin"  required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="dest" class="col-sm-12 col-form-label">Parcel Destination</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="dest" name="parcel_destination" required >
            </div>
          </div>
          <div class="row mb-3">
            <label for="receiver" class="col-sm-12 col-form-label">Receiver</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="receiver" name="receiver"  required>
            </div>
          </div>
           <div class="row mb-3">
            <label for="currentLocation" class="col-sm-12 col-form-label">Active Current Location</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="currentLocation" name="active_current_location"  >
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
            <label for="message" class="col-sm-12 col-form-label">Message</label>
            <div class="col-sm-12">
              <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>
          </div>
          </form>
        </div>
      </div>




      @php
          

          function generateCustomID(int $numericLength = 9, bool $useTimestamp = false): string {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';

    $letterPart = substr(str_shuffle($letters), 0, 4);
    $numberPart = substr(str_shuffle($numbers), 0, $numericLength);

    if ($useTimestamp) {
        $timestamp = now()->format('YmdHis'); // Get current timestamp in YYYYMMDDHHMMSS format
        $numberPart = $timestamp . $numberPart;
    }

    return  "D" . $letterPart . $numberPart;
}

      @endphp


{{generateCustomID(7)}}

</div>


@endsection