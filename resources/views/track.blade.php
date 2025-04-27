@extends('layouts.home')

@section('content')





  <!-- Start Contact Form Area -->
  <section class="trucker__contact-form-area">
    <div class="trucker__container">
      <div class="trucker__contact-form-wrapper">
        <div class="trucker__title-wrapper">
          <h2 class="trucker__main-title trucker__align-center wow img-custom-anim-right">Track 
          </h2>
          <div class="trucker__contact-form-inner wow img-custom-anim-top row">
            <div class="col-2"></div>
            
            <form action="#" method="POST" class="col-8 ">
                
                <div class="trucker__input-flexing">
                    <div class="trucker__input-flexing-item">
                        <span
                        class="trucker__input-field-name trucker__fs-17 trucker__fw-600 trucker__fm-jost trucker__deep-sea-blue">Track ID</span>
                        <input type="text" placeholder="Type your Track ID">
                    </div>
                    
                    <div class="trucker__input-form-submit text-center">
                        <button type="submit" class="trucker__btn-style-1">Track 
                        </div>
                    </form>
                    <div class="col-2"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Form Area -->

@endsection