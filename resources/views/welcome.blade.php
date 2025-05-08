
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
                <a href="/track" class="trucker__btn-style-1 trucker__item-order-btn"> Track Parcel</a>
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
          

            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Area -->


   <!-- Start Faq Area -->
   <section class="trucker__faq-area-home-1">
    <div class="trucker__faq-wrapper">
      <div class="trucker__faq-left">
        <div class="trucker__faq-left-wrapper">
          <div class="trucker__faq-title">
            <h2 class="trucker__fs-47 trucker__fw-700 trucker__deep-sea-blue wow img-custom-anim-left">Frequenlty Asked
              Questions <br>
              By Our Clients</h2>
          </div>
          <div class="trucker__faq-inner">
            <div class="trucker__faq-style-1">
              <div class="trucker__faq-item wow img-custom-anim-left">
                <div class="trucker__faq-question">
                  <h3 class="trucker__fs-18 trucker__fw-700 trucker__deep-sea-blue">Is My Technology Allowed on Tech?
                  </h3>
                  <span class="trucker__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-icon trucker__hidden"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-off-icon" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                      <path
                        d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24">
                      </path>
                      <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                  </span>
                </div>
                <div class="trucker__faq-answer" style="display: block;">
                  <p class="trucker__fs-16 trucker__fw-500 trucker__gray">There are many variations of passages of
                    available but the Ut <br> elit tellus luctus nec ullamcorper at mattis</p>
                </div>
              </div>
              <div class="trucker__faq-item wow img-custom-anim-right">
                <div class="trucker__faq-question">
                  <h3 class="trucker__fs-18 trucker__fw-700 trucker__deep-sea-blue">How Long Does air Freight Take?</h3>
                  <span class="trucker__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-icon trucker__hidden"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-off-icon" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                      <path
                        d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24">
                      </path>
                      <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                  </span>
                </div>
                <div class="trucker__faq-answer">
                  <p class="trucker__fs-16 trucker__fw-500 trucker__gray">There are many variations of passages of
                    available but the Ut <br> elit tellus luctus nec ullamcorper at mattis</p>
                </div>
              </div>
              <div class="trucker__faq-item wow img-custom-anim-top">
                <div class="trucker__faq-question">
                  <h3 class="trucker__fs-18 trucker__fw-700 trucker__deep-sea-blue">What Payment Methods are Supported?
                  </h3>
                  <span class="trucker__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-icon trucker__hidden"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-off-icon" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                      <path
                        d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24">
                      </path>
                      <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                  </span>
                </div>
                <div class="trucker__faq-answer">
                  <p class="trucker__fs-16 trucker__fw-500 trucker__gray">There are many variations of passages of
                    available but the Ut <br> elit tellus luctus nec ullamcorper at mattis</p>
                </div>
              </div>
              <div class="trucker__faq-item wow img-custom-anim-left">
                <div class="trucker__faq-question">
                  <h3 class="trucker__fs-18 trucker__fw-700 trucker__deep-sea-blue">What Payment Methods are Supported?
                  </h3>
                  <span class="trucker__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-icon trucker__hidden"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-off-icon" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                      <path
                        d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24">
                      </path>
                      <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                  </span>
                </div>
                <div class="trucker__faq-answer">
                  <p class="trucker__fs-16 trucker__fw-500 trucker__gray">There are many variations of passages of
                    available but the Ut <br> elit tellus luctus nec ullamcorper at mattis</p>
                </div>
              </div>
              <div class="trucker__faq-item wow img-custom-anim-right">
                <div class="trucker__faq-question">
                  <h3 class="trucker__fs-18 trucker__fw-700 trucker__deep-sea-blue">What Payment Methods are Supported?
                  </h3>
                  <span class="trucker__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-icon trucker__hidden"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="trucker__eye-off-icon" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                      <path
                        d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24">
                      </path>
                      <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                  </span>
                </div>
                <div class="trucker__faq-answer">
                  <p class="trucker__fs-16 trucker__fw-500 trucker__gray">There are many variations of passages of
                    available but the Ut <br> elit tellus luctus nec ullamcorper at mattis</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="trucker__faq-right">
        <img src="assets/images/home-1/faq.jpg" alt="Trucker - Transport Courier & Logistics Html Template"
          class="wow img-custom-anim-left">
        <div class="trucker__faq-contact wow img-custom-anim-top">
          <img src="assets/images/icon/faq-icon-home-1.png" alt="Trucker - Transport Courier & Logistics Html Template"
            class="trucker__faq-icon">
          <span class="trucker__support-text trucker__fs-24 trucker__fw-500 trucker__white">27/4 Online Support</span>
          <a href="tel:91458654528" class="trucker__faq-phone-number trucker__white trucker__fs-24 trucker__fw-500">+91
            458 654 528</a>
          <div class="trucker__faq-send-btn-wrapper">
            <a href="#" class="trucker__btn-style-1 trucker__faq-send-btn">Send Now <i
                class="fa-light fa-arrow-up-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Faq Area -->








@endsection