@extends('layouts.home')

@section('content')




<div class="bg-white p-4  fill-screen d-flex justify-content-center align-items-center">


    <div class="card pt-4 mt-5 z-3 w-50" style="">
        <div class="card-body">
          <h2 class="card-title mb-4">Generate Track ID</h2>
          <form>
            
        <fieldset>
          
          <div class="row mb-3">
            <label for="type" class="col-sm-12 col-form-label">Type</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="type" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="mode" class="col-sm-12 col-form-label">Mode</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="mode" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="status" class="col-sm-12 col-form-label">Status</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="status" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="pieces" class="col-sm-12 col-form-label">Pieces</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="pieces" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="weight" class="col-sm-12 col-form-label">Weight</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="weight" >
              <label for="">KG</label>
            </div>
          </div>
          <div class="row mb-3">
            <label for="cubic" class="col-sm-12 col-form-label">Cubic (CB)</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="cubic" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="startDate" class="col-sm-12 col-form-label">Start Date</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="row mb-3">
            <label for="arrivalDate" class="col-sm-12 col-form-label">Arrival Date</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="row mb-3">
            <label for="sender" class="col-sm-12 col-form-label">Sender</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="sender" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="origin" class="col-sm-12 col-form-label">Package Origin</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="origin" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="dest" class="col-sm-12 col-form-label">Parcel Destination</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="dest" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="receiver" class="col-sm-12 col-form-label">Receiver</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="receiver" >
            </div>
          </div>
           <div class="row mb-3">
            <label for="currentLocation" class="col-sm-12 col-form-label">Active Current Location</label>
            <div class="col-sm-12">
              <input type="text" class="form-control" id="currentLocation" >
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
            <label for="message" class="col-sm-12 col-form-label">Message</label>
            <div class="col-sm-12">
              <textarea class="form-control" id="message" rows="3">Dead</textarea>
            </div>
          </div>
          </form>
        </div>
      </div>




</div>


@endsection