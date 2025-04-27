
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

@extends('layouts.home')


@section('content')


  <!-- Start Hero Area  -->
  <section class="trucker__hero-area" data-background="assets/images/home-1/home-1-hero.jpg">
    <div class="trucker__container">
      <div class="trucker__hero-wrapper">
        <div class="trucker__hero-text-content trucker__align-center">
          <h5 class="trucker__hero-sub-title trucker__white trucker__fs-24 trucker__fw-500 wow img-custom-anim-left">
            CARGO. TRANSPORT. LOGISTICS</h5>
          <h2 class="trucker__hero-title trucker__white trucker__fs-70 trucker__fw-700 wow img-custom-anim-right">World
            Wide Shipping <br> & Fast Solutions.</h2>
            <div class="trucker__pricing-btn wow img-custom-anim-right btn ">
                <a href="#" class="trucker__btn-style-1 trucker__item-order-btn"> Track Parcel</a>
              </div>

        </div>
        <div class="trucker__hero-features-wrapper">
          <div class="trucker__hero-features-item wow img-custom-anim-top">
            <img src="assets/images/icon/home-1-hero-icon-1.png"
              alt="Trucker - Transport Courier & Logistics Html Template">
            <p class="trucker__hero-features-item-name trucker__white trucker__fs-22 trucker__fw-700">Road Freight</p>
          </div>
          <div class="trucker__hero-item-border-line trucker__white"></div>
          <div class="trucker__hero-features-item wow img-custom-anim-top">
            <img src="assets/images/icon/home-1-hero-icon-2.png"
              alt="Trucker - Transport Courier & Logistics Html Template">
            <p class="trucker__hero-features-item-name trucker__white trucker__fs-22 trucker__fw-700">Air Freight</p>
          </div>
          <div class="trucker__hero-item-border-line trucker__white"></div>
          <div class="trucker__hero-features-item wow img-custom-anim-top">
            <img src="assets/images/icon/home-1-hero-icon-3.png"
              alt="Trucker - Transport Courier & Logistics Html Template">
            <p class="trucker__hero-features-item-name trucker__white trucker__fs-22 trucker__fw-700">Ocean Freight</p>
          </div>
          <div class="trucker__hero-item-border-line trucker__white"></div>
          <div class="trucker__hero-features-item wow img-custom-anim-top">
            <img src="assets/images/icon/home-1-hero-icon-4.png"
              alt="Trucker - Transport Courier & Logistics Html Template">
            <p class="trucker__hero-features-item-name trucker__white trucker__fs-22 trucker__fw-700">Train Freight</p>
          </div>
          <div class="trucker__hero-item-border-line trucker__white"></div>
          <div class="trucker__hero-features-item wow img-custom-anim-top">
            <img src="assets/images/icon/home-1-hero-icon-5.png"
              alt="Trucker - Transport Courier & Logistics Html Template">
            <p class="trucker__hero-features-item-name trucker__white trucker__fs-22 trucker__fw-700">Drone Freight</p>
          </div>
          <div class="trucker__hero-item-border-line trucker__white"></div>
          <div class="trucker__hero-features-item wow img-custom-anim-top">
            <img src="assets/images/icon/home-1-hero-icon-6.png"
              alt="Trucker - Transport Courier & Logistics Html Template">
            <p class="trucker__hero-features-item-name trucker__white trucker__fs-22 trucker__fw-700">Send Gift</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Area -->


  <!-- Start About Area -->
  <section class="trucker__about-area-home-1">
    <div class="trucker__container">
      <div class="trucker__about-wrapper">
        <div class="trucker__about-left-site wow img-custom-anim-left">
          <img src="assets/images/home-1/about.jpg" alt="Trucker - Transport Courier & Logistics Html Template">
        </div>
        <div class="trucker__about-right-site wow img-custom-anim-right">
          <h3 class="trucker__about-title trucker__fs-35 trucker__fw-700 trucker__deep-sea-blue">We Provide Full
            Assistance in <br> Freight And Warehousing</h3>
          <p class="trucker__about-sub-titel trucker__fs-16 trucker__fw-400 trucker__gray">Organically grow the holistic
            world view of disruptive innovation via <br> workplace.Organically grow the holistic world</p>
          <div class="trucker__about-some-info-wrapper">
            <div class="trucker__about-some-info-item">
              <span class="trucker__about-some-info-icon">
                <img src="assets/images/icon/home-1-about-icon-1.png"
                  alt="Trucker - Transport Courier & Logistics Html Template">
              </span>
              <h5 class="trucker__about-some-info-title trucker__fs-20 trucker__fw-700 trucker__deep-sea-blue">Worldwide
                Logistic Services</h5>
            </div>
            <div class="trucker__about-some-info-item">
              <span class="trucker__about-some-info-icon">
                <img src="assets/images/icon/home-1-about-icon-2.png"
                  alt="Trucker - Transport Courier & Logistics Html Template">
              </span>
              <h5 class="trucker__about-some-info-title trucker__fs-20 trucker__fw-700 trucker__deep-sea-blue">Friendly
                Support Team</h5>
            </div>
          </div>
          <ul class="trucker__about-info-point">
            <li>
              <span class="trucker__about-info-point-icon">
                <i class="fa-light fa-check"></i>
              </span>
              <span class="trucker__about-info-point-text trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue">Quality
                control system and transparency.</span>
            </li>
            <li>
              <span class="trucker__about-info-point-icon">
                <i class="fa-light fa-check"></i>
              </span>
              <span class="trucker__about-info-point-text trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue">100%
                Satisfaction with real time tracking.</span>
            </li>
            <li>
              <span class="trucker__about-info-point-icon">
                <i class="fa-light fa-check"></i>
              </span>
              <span class="trucker__about-info-point-text trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue">Highly
                professional staff, 24/7 online support.</span>
            </li>
          </ul>
          <div class="trucker__about-writer-info-wrapper">
            <div class="trucker__about-writer-info-inner">
              <img src="assets/images/home-1/home-1-about-content-writer.png"
                alt="Trucker - Transport Courier & Logistics Html Template">
              <div class="trucker__about-writer-info-name-regi">
                <h5 class="trucker__about-writer-info-name trucker__fs-20 trucker__fw-700 trucker__deep-sea-blue">Kate
                  Attjamin</h5>
                <p class="trucker__about-writer-info-regi trucker__fs-16 trucker__fw-400 trucker__gray">Founder &
                  Director</p>
              </div>
            </div>
            <div class="trucker__about-writer-signeture">
              <img src="assets/images/home-1/home-1-about-content-writer-sign.png"
                alt="Trucker - Transport Courier & Logistics Html Template">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Area -->









@endsection