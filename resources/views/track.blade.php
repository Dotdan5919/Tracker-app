@extends('layouts.home')

@section('content')





  <!-- Start Contact Form Area -->
  <section class="trucker__contact-form-area">
    <div class="trucker__container">
      <div class="trucker__contact-form-wrapper d-flex justify-content-center align-items-center">
        <div class="trucker__title-wrapper w-75">
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">Track 
          </h2>
          <div class="trucker__contact-form-inner wow img-custom-anim-top row">
            <div class="col-2"></div>
            
            <form action="{{route('find_item')}}" method="POST" class="col-8 ">
                @csrf
                <div class="trucker__input-flexing">
                    <div class="trucker__input-flexing-item">
                        <span
                        class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Track ID</span>
                        <input type="text" name="item_id" placeholder="Type your Track ID">
                    </div>
                    
                    <div class="trucker__input-form-submit text-center">
                        <button type="submit" class="trucker__btn-style-1">Track 
                        </div>
                    </form>
                    <div class="col-2"></div>
                    
          </div>

          {{-- card --}}
          



        </div>

        @if(isset($item))
        <div class="card mb-4 w-75 mx-auto">
          <div class="card-body">
            <h2 class="card-title h5 border-bottom pb-2">Plan Details</h2>
            <p class="card-text small text-muted">Plan ID:{{$item->item_id}}</p>
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Type</p>
                <p class="card-text small">{{$item->type}}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Mode</p>
                <p class="card-text small">{{$item->mode}}</p>
              </div>
            </div>
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Status</p>
                <p class="card-text small">{{$item->status}}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Pieces</p>
                <p class="card-text small">{{$item->pieces}}</p>
              </div>
            </div>
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Weight</p>
                <p class="card-text small">{{$item->weight}} KG</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Cubic (CB)</p>
                <p class="card-text small">{{$item->cubic}}</p>
              </div>
            </div>
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Start Date</p>
                <p class="card-text small">{{$item->start_date}}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Arrival Date</p>
                <p class="card-text small">{{$item->arrival_date}}</p>
              </div>
            </div>
             <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Sender</p>
                <p class="card-text small">{{$item->sender}}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Package Origin</p>
                <p class="card-text small">{{$item->package_origin}}</p>
              </div>
            </div>
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Sender Address</p>
                <p class="card-text small">{{$item->sender_address}}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Parcel Dest.</p>
                <p class="card-text small">{{$item->parcel_description}}</p>
              </div>
            </div>
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted">Receiver</p>
                <p class="card-text small">{{$item->receiver}}</p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Receiver Address</p>
                <p class="card-text small">{{$item->receiver_address}}</p>
              </div>
            </div>
        
            <div class="row mb-2 pt-2">
              <div class="col-6">
                <p class="card-text small font-medium text-muted"></p>
                <p class="card-text small"></p>
              </div>
              <div class="col-6 text-right">
                <p class="card-text small font-medium text-muted">Active Current Location</p>
                <p class="card-text small">{{$item->active_current_location}}</p>
              </div>
            </div>
            <div class="mt-4">
              <h3 class="card-title h6 small font-medium text-muted mb-2">Status</h3>
              <div class="border border-secondary rounded p-3 bg-light text-sm">{{$item->status}}</div>
            </div>
            <div>
              <h3 class="card-title h6 small font-medium text-muted mb-2">Message</h3>
              <div class="border border-secondary rounded p-3 bg-light text-sm min-vh-25">{{$item->message}}</div>
            </div>
          </div>
          <div class="card-footer bg-light text-right">
            {{-- <button class="btn btn-outline-warning">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                <rect width="12" height="8" x="6" y="14"></rect>
              </svg>
              Print
            </button> --}}
          </div>
        </div>


        @elseif (isset($error))
        <div class="alert alert-warning" role="alert">
          
          <p>  {{$error}}</p>
        </div>

      

        @endif
        <div>


          
          
        </div>




      </div>
    </div>
  </section>
  <!-- End Contact Form Area -->

@endsection