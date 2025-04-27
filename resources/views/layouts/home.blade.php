<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D-tracker</title>

  <!--Start css files-->
  <link rel="stylesheet preload" href="assets/css/font-awesome-pro.css" as="style">
  <link rel="stylesheet preload" href="assets/css/bootstrap.min.css" as="style">
  <link rel="stylesheet preload" href="assets/css/swiper.css" as="style">
  <link rel="stylesheet preload" href="assets/css/nice-select.css" as="style">
  <link rel="stylesheet preload" href="assets/css/animate.css" as="style">
  <link rel="stylesheet preload" href="assets/css/odometer-theme-default.min.css" as="style">
  <link rel="stylesheet preload" href="assets/css/magnific-popup.css" as="style">
  <link rel="stylesheet preload" href="assets/css/style.css" as="style">
  <!-- End Css File -->

  <!-- Start Favicon-->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
  <!-- End Favicon -->
</head>

<body>
  
  <!-- Start Site Preloader -->
  <div id="trucker__preloader">
    <div id="trucker__circle_loader"></div>
    <div class="trucker__loader_logo"><img src="assets/images/logo/logo.svg" alt="Preload"></div>
  </div>
  <!-- End Site Preloader -->

  <!-- Start Scroll To Top Here  -->
  <div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- End Scroll To Top Here -->

  <!-- Start Header Area -->
  <header class="trucker__header-area-home-1">
    <div class="trucker__header-topbar">
      <div class="trucker__container">
        <div class="trucker__header-wrapper">
          <div class="trucker__topbar-left">
            <a href="mailto:trucker@yourdomain.com"
              class="trucker__header-topbar-info trucker__fs-15 trucker__fw-400 trucker__white"><i
                class="fa-sharp fa-light fa-envelope"></i> trucker@yourdomain.com</a>
            <a href="tel:880-61234567890"
              class="trucker__header-topbar-info trucker__fs-15 trucker__fw-400 trucker__white"><i
                class="fa-light fa-phone"></i> +880-61234567890</a>
          </div>
          <div class="trucker__topbar-right">
            <div class="trucker__topbar-lan-select">
              <select class="trucker__language-selection">
                <option value="bangla">Bangla</option>
                <option value="english">English</option>
                <option value="japanis">Japanis</option>
                <option value="arabic">Arabic</option>
              </select>
            </div>
            <div class="trucker__topbar-social-media">
              <a href="#" class="trucker__white"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="trucker__white"><i class="fa-brands fa-youtube"></i></a>
              <a href="#" class="trucker__white"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" class="trucker__white"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="trucker__header-menu">
      <div class="trucker__container">
        <div class="trucker__menu-wrapper">
          <div class="trucker__logo">
            <a href="index.html">
              <img src="assets/images/logo/logo.svg" alt="Trucker - Transport Courier & Logistics Html Template">
            </a>
          </div>
          <div class="trucker__menu__inner">
            <nav>
              <ul class="trucker__menu">
                <li><a href="#"
                    class="trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue ">Home</a>
                 
                </li>
                <li><a href="" class="trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue">About</a></li>
             
            
                <li><a href="#" class="trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue">Contact</a>
                </li>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li><a href="{{route('dashboard')}}" class="trucker__fs-16 trucker__fw-500 trucker__deep-sea-blue">Dashboard</a>
                      
                    @endauth
                </div>
            @endif
                
                
                </li>
              </ul>
            </nav>
          </div>
          <div class="trucker__header-menu-right">
            <div class="trucker-search-mobile-menu-btn">
              <a href="javascript:void(0)" class="trucker__search-icon trucker__deep-sea-blue search-trigger"
                aria-label="Open search"><i class="fa-solid fa-magnifying-glass"></i></a>
              <a href="javascript:void(0)" class="trucker__mobile-menu-bar">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.5 5.6159C7.5 6.65134 6.66054 7.49071 5.625 7.49071C4.58946 7.49071 3.75 6.65134 3.75 5.6159C3.75 4.58047 4.58946 3.74109 5.625 3.74109C6.66054 3.74109 7.5 4.58047 7.5 5.6159ZM7.5 14.99C7.5 16.0254 6.66054 16.8648 5.625 16.8648C4.58946 16.8648 3.75 16.0254 3.75 14.99C3.75 13.9546 4.58946 13.1152 5.625 13.1152C6.66054 13.1152 7.5 13.9546 7.5 14.99ZM5.625 26.2388C6.66054 26.2388 7.5 25.3994 7.5 24.364C7.5 23.3286 6.66054 22.4892 5.625 22.4892C4.58946 22.4892 3.75 23.3286 3.75 24.364C3.75 25.3994 4.58946 26.2388 5.625 26.2388ZM16.875 14.99C16.875 16.0254 16.0355 16.8648 15 16.8648C13.9645 16.8648 13.125 16.0254 13.125 14.99C13.125 13.9546 13.9645 13.1152 15 13.1152C16.0355 13.1152 16.875 13.9546 16.875 14.99ZM15 7.49071C16.0355 7.49071 16.875 6.65134 16.875 5.6159C16.875 4.58047 16.0355 3.74109 15 3.74109C13.9645 3.74109 13.125 4.58047 13.125 5.6159C13.125 6.65134 13.9645 7.49071 15 7.49071ZM16.875 24.364C16.875 25.3994 16.0355 26.2388 15 26.2388C13.9645 26.2388 13.125 25.3994 13.125 24.364C13.125 23.3286 13.9645 22.4892 15 22.4892C16.0355 22.4892 16.875 23.3286 16.875 24.364ZM24.375 16.8648C25.4105 16.8648 26.25 16.0254 26.25 14.99C26.25 13.9546 25.4105 13.1152 24.375 13.1152C23.3395 13.1152 22.5 13.9546 22.5 14.99C22.5 16.0254 23.3395 16.8648 24.375 16.8648ZM26.25 5.6159C26.25 6.65134 25.4105 7.49071 24.375 7.49071C23.3395 7.49071 22.5 6.65134 22.5 5.6159C22.5 4.58047 23.3395 3.74109 24.375 3.74109C25.4105 3.74109 26.25 4.58047 26.25 5.6159ZM24.375 26.2388C25.4105 26.2388 26.25 25.3994 26.25 24.364C26.25 23.3286 25.4105 22.4892 24.375 22.4892C23.3395 22.4892 22.5 23.3286 22.5 24.364C22.5 25.3994 23.3395 26.2388 24.375 26.2388Z"
                    fill="#2A9D8F" />
                </svg>
              </a>
            </div>
            <div class="trucker__header-btn">
              <a href="#" class="trucker__btn-style-1">Track Order <i class="fa-light fa-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  @yield('content')


  
  <!-- Star Footer Area -->
  <section class="trucker__footer-area-home-2" data-background="assets/images/inner/footer-bg.png">
    <div class="trucker__container">
      <div class="trucker__footer-wrapper">
        <div class="trucker__footer-logo wow fadeInLeft">
          <a href="#" class="trucker__footer-logo">
            <img src="assets/images/logo/logo-2.svg" alt="Trucker - Transport Courier & Logistics Html Template">
          </a>
          <p class="trucker__footer-logo-bottom-text">The world’s first and largest digital market <br> for crypto
            collectibles and non-fungible <br> (NFTs). Buy</p>
          <div class="trucker__footer-location">
            <span class="trucker__footer-location-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                <g clip-path="url(#clip0_1_4999)">
                  <path
                    d="M11.3641 0.303711C6.97117 0.303711 3.39868 4.17202 3.39868 8.92871C3.39868 14.9073 10.5888 22.7618 10.8941 23.0938C11.0242 23.2333 11.1942 23.3037 11.3641 23.3037C11.534 23.3037 11.704 23.2333 11.8341 23.0938C12.1394 22.7618 19.3295 14.9073 19.3295 8.92871C19.3295 4.17202 15.757 0.303711 11.3641 0.303711ZM11.3641 21.5456C9.77898 19.7085 4.72625 13.4956 4.72625 8.92871C4.72625 4.96552 7.70399 1.74121 11.3641 1.74121C15.0242 1.74121 18.002 4.96552 18.002 8.92871C18.002 13.4913 12.9492 19.7085 11.3641 21.5456Z"
                    fill="#2A9D8F" />
                  <path
                    d="M11.3638 4.61621C9.16801 4.61621 7.3811 6.55109 7.3811 8.92871C7.3811 11.3063 9.16801 13.2412 11.3638 13.2412C13.5596 13.2412 15.3465 11.3063 15.3465 8.92871C15.3465 6.55109 13.5596 4.61621 11.3638 4.61621ZM11.3638 11.8037C9.8995 11.8037 8.70867 10.5143 8.70867 8.92871C8.70867 7.34315 9.8995 6.05371 11.3638 6.05371C12.8281 6.05371 14.019 7.34315 14.019 8.92871C14.019 10.5143 12.8281 11.8037 11.3638 11.8037Z"
                    fill="#2A9D8F" />
                </g>
                <defs>
                  <clipPath id="clip0_1_4999">
                    <rect width="21.2411" height="23" fill="white" transform="translate(0 0.303711)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
            <span class="trucker__footer-location-text">
              86 Road Broklyn Street, 600 <br> New York, USA
            </span>
          </div>
          <div class="trucker__footer-email-phone">
            <span class="trucker__footer-email-phone-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                <path
                  d="M2.51812 19.939C2.20374 19.9371 1.90271 19.8011 1.68041 19.5604C1.45811 19.3197 1.33248 18.9937 1.33081 18.6533V8.07957C1.33249 7.37449 1.5919 6.6988 2.05235 6.20023C2.51279 5.70166 3.13681 5.42076 3.78797 5.41895H15.3753C16.0276 5.41894 16.6533 5.69904 17.1151 6.19781C17.5769 6.69657 17.8372 7.3733 17.8389 8.07957V15.1265C17.8389 15.8327 17.5802 16.5102 17.1196 17.0102C16.6589 17.5103 16.034 17.7921 15.3817 17.794H5.71814C5.60838 17.7949 5.50172 17.8334 5.41338 17.904L3.23558 19.6846C3.02793 19.8507 2.77632 19.9399 2.51812 19.939ZM3.78797 6.79395C3.47359 6.79575 3.17256 6.93178 2.95026 7.17249C2.72795 7.4132 2.60233 7.73916 2.60066 8.07957V18.4815L4.65147 16.804C4.96004 16.5558 5.33378 16.4209 5.71814 16.419H15.3753C15.6919 16.419 15.9955 16.2828 16.2194 16.0404C16.4432 15.798 16.569 15.4692 16.569 15.1265V8.07957C16.5673 7.73916 16.4417 7.4132 16.2194 7.17249C15.9971 6.93178 15.6961 6.79575 15.3817 6.79395H3.78797Z"
                  fill="#2A9D8F" />
                <path
                  d="M12.0865 12.3555C12.437 12.3555 12.7211 12.0477 12.7211 11.668C12.7211 11.2883 12.437 10.9805 12.0865 10.9805C11.736 10.9805 11.4519 11.2883 11.4519 11.668C11.4519 12.0477 11.736 12.3555 12.0865 12.3555Z"
                  fill="#2A9D8F" />
                <path
                  d="M9.62265 12.3555C9.97314 12.3555 10.2573 12.0477 10.2573 11.668C10.2573 11.2883 9.97314 10.9805 9.62265 10.9805C9.27216 10.9805 8.98804 11.2883 8.98804 11.668C8.98804 12.0477 9.27216 12.3555 9.62265 12.3555Z"
                  fill="#2A9D8F" />
                <path
                  d="M7.08261 12.3555C7.4331 12.3555 7.71723 12.0477 7.71723 11.668C7.71723 11.2883 7.4331 10.9805 7.08261 10.9805C6.73213 10.9805 6.448 11.2883 6.448 11.668C6.448 12.0477 6.73213 12.3555 7.08261 12.3555Z"
                  fill="#2A9D8F" />
                <path
                  d="M19.7438 12.9814C19.5754 12.9814 19.4139 12.909 19.2949 12.7801C19.1758 12.6511 19.1089 12.4763 19.1089 12.2939V5.32957C19.1072 4.98916 18.9816 4.6632 18.7593 4.42249C18.537 4.18178 18.236 4.04575 17.9216 4.04395H5.14054C4.97215 4.04395 4.81065 3.97151 4.69158 3.84258C4.57251 3.71365 4.50562 3.53878 4.50562 3.35645C4.50562 3.17411 4.57251 2.99924 4.69158 2.87031C4.81065 2.74138 4.97215 2.66895 5.14054 2.66895H17.9216C18.5727 2.67076 19.1968 2.95166 19.6572 3.45023C20.1176 3.9488 20.3771 4.62449 20.3787 5.32957V12.2939C20.3787 12.4763 20.3118 12.6511 20.1928 12.7801C20.0737 12.909 19.9122 12.9814 19.7438 12.9814Z"
                  fill="#2A9D8F" />
              </svg>
            </span>
            <div class="trucker__footer-email-phone-text">
              <a href="mailto:needhelp@company.com" class="trucker__footer-email-text">needhelp@company.com</a>
              <a href="tel:926668880000" class="trucker__footer-phone-text">+92 666 888 0000</a>
            </div>
          </div>
        </div>
        <div class="trucker__footer-menu-wrapper wow fadeInUp">
          <div class="trucker__footer-menu">
            <h5 class="trucker__footer-menu-title">Services Req</h5>
            <ul class="trucker__footer-menu-list">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Property on sale
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  About Real estate
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Team membar
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Terms of use
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Privacy Policy
                </a>
              </li>
            </ul>
          </div>
          <div class="trucker__footer-menu">
            <h5 class="trucker__footer-menu-title">Contact Info</h5>
            <ul class="trucker__footer-menu-list">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Services Details
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Contact
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Services Details
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Terms
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                    <path
                      d="M9.67468 1.39483L10.0296 8.02683C10.0398 8.21614 9.98018 8.39852 9.86206 8.54077C9.74381 8.68317 9.58184 8.76746 9.40556 8.7784L8.84455 8.81292C8.6684 8.82386 8.4983 8.75997 8.36571 8.63311C8.23319 8.50632 8.1504 8.32823 8.14035 8.13913L7.92912 4.26615L2.53255 10.7651C2.28924 11.0582 1.88328 11.0852 1.61024 10.824L1.19085 10.4227C0.917809 10.1614 0.874815 9.70482 1.11813 9.4118L6.53397 2.88959L2.89565 3.12075C2.71935 3.13155 2.55263 3.0709 2.42005 2.94404C2.2876 2.81732 2.21062 2.64478 2.2005 2.45562L2.16916 1.85434C2.15903 1.66502 2.21893 1.48307 2.33718 1.34067C2.45529 1.19842 2.61755 1.11427 2.79391 1.1034L8.97209 0.722437C9.14894 0.711606 9.31963 0.775904 9.45203 0.903302C9.58547 1.03041 9.66466 1.20506 9.67468 1.39483Z"
                      fill="#2A9D8F" />
                  </svg>
                  Home Buying
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="trucker__footer-newslatter wow fadeInRight">
          <h5 class="trucker__footer-newlatter-title">Newsletter</h5>
          <div class="trucker__footer-newslatter-wrapper">
            <form method="POST">
              <input type="email" placeholder="Enter Email Adress">
              <button type="submit"><i class="fa-regular fa-arrow-up"></i></button>
            </form>
            <div class="trucker__footer-input-text-point">
              <div class="trucker__agreement-container">
                <div class="trucker__checkbox"></div>
                <div class="trucker__text">I agree to all your terms and policies</div>
              </div>
            </div>
            <div class="trucker__footer-newslatter-icons">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
            </div>
          </div>

        </div>
      </div>
      <div class="trucker__footer-info-hilight wow fadeInUp">
        <div class="trucker__footer-info-left">
          <img src="assets/images/icon/footer-icon-1.png" alt="Trucker - Transport Courier & Logistics Html Template"
            class="trucker__footer-icon-1">
          <div class="trucker__footer-info-email-text-wrapper">
            <span class="trucker__footer-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="65" height="66" viewBox="0 0 65 66" fill="none">
                <g clip-path="url(#clip0_1_4985)">
                  <path
                    d="M64.766 51.3186L60.9908 40.3317C62.8106 36.6117 63.7722 32.4746 63.7787 28.3119C63.7899 21.0739 60.9896 14.2302 55.8934 9.04162C50.7962 3.85202 44.004 0.93069 36.7676 0.816051C29.264 0.697477 22.211 3.55164 16.9086 8.85398C11.7956 13.9668 8.95975 20.7071 8.86999 27.9099C3.83071 31.7041 0.856317 37.6195 0.866092 43.9378C0.870789 46.8946 1.53628 49.8337 2.79731 52.4914L0.196921 60.0589C-0.250082 61.3598 0.0764421 62.7722 1.04916 63.745C1.73369 64.4296 2.6362 64.7941 3.56436 64.7941C3.95487 64.7941 4.34995 64.7296 4.73525 64.5972L12.3028 61.9968C14.9606 63.2578 17.8997 63.9233 20.8564 63.928C20.8671 63.928 20.8772 63.928 20.8879 63.928C27.3003 63.9278 33.2608 60.8767 37.0411 55.7139C40.975 55.6103 44.8672 54.658 48.386 52.9366L59.3731 56.712C59.8308 56.8693 60.3003 56.946 60.7643 56.946C61.8673 56.946 62.9398 56.5128 63.7535 55.699C64.9092 54.5431 65.2972 52.8647 64.766 51.3186ZM20.8877 60.059C20.8794 60.059 20.8706 60.059 20.8624 60.059C18.2454 60.0551 15.6465 59.4099 13.3473 58.1934C12.8745 57.9434 12.3194 57.9001 11.8139 58.0738L4.05414 60.7402L6.72055 52.9806C6.89422 52.4749 6.85105 51.9199 6.60096 51.4472C5.38449 49.1479 4.73931 46.5491 4.73525 43.932C4.72878 39.7223 6.36635 35.7323 9.23003 32.7446C10.1654 38.4468 12.8831 43.7014 17.0957 47.8391C21.2771 51.9462 26.5333 54.5611 32.2045 55.416C29.21 58.3676 25.1733 60.059 20.8877 60.059ZM61.0174 52.9632C60.9073 53.0732 60.7768 53.1032 60.63 53.0527L48.868 49.011C48.6638 48.9408 48.4513 48.906 48.2395 48.906C47.9273 48.906 47.6163 48.9815 47.3348 49.1306C43.9765 50.9072 40.1816 51.8494 36.3601 51.8553C36.3475 51.8553 36.3361 51.8553 36.3235 51.8553C23.5186 51.8553 12.9418 41.4535 12.7389 28.6516C12.6367 22.2043 15.0892 16.1449 19.6444 11.5897C24.1996 7.03448 30.26 4.58289 36.7064 4.68445C49.5206 4.8877 59.9295 15.4841 59.9097 28.3058C59.9037 32.1273 58.9616 35.9224 57.1851 39.2804C56.935 39.753 56.8919 40.3081 57.0656 40.8137L61.1071 52.5757C61.1575 52.723 61.1273 52.8534 61.0174 52.9632Z"
                    fill="white" />
                  <path
                    d="M47.8474 18.0146H24.7978C23.7294 18.0146 22.8633 18.8809 22.8633 19.9492C22.8633 21.0176 23.7295 21.8837 24.7978 21.8837H47.8474C48.9159 21.8837 49.782 21.0175 49.782 19.9492C49.782 18.8809 48.9159 18.0146 47.8474 18.0146Z"
                    fill="white" />
                  <path
                    d="M47.8474 25.9717H24.7978C23.7294 25.9717 22.8633 26.8379 22.8633 27.9062C22.8633 28.9745 23.7295 29.8407 24.7978 29.8407H47.8474C48.9159 29.8407 49.782 28.9745 49.782 27.9062C49.782 26.8379 48.9159 25.9717 47.8474 25.9717Z"
                    fill="white" />
                  <path
                    d="M38.9753 33.9277H24.798C23.7296 33.9277 22.8635 34.7939 22.8635 35.8623C22.8635 36.9307 23.7297 37.7968 24.798 37.7968H38.9752C40.0436 37.7968 40.9097 36.9306 40.9097 35.8623C40.9097 34.7939 40.0437 33.9277 38.9753 33.9277Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_1_4985">
                    <rect width="65" height="65" fill="white" transform="translate(0 0.303711)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
            <span class="trucker__footer-info-email-text">
              Contact Us
              <a href="mailto:website_stock@gmail.com">website_stock@gmail.com</a>
            </span>
          </div>
        </div>
        <div class="trucker__footer-info-right">
          <div class="trucker__footer-info-right-wrapper">
            <span class="trucker__footer-info-headset">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="61" viewBox="0 0 60 61" fill="none">
                <path
                  d="M58.2813 31.8496C57.3995 29.8769 55.6541 28.0042 53.6359 26.7042C53.5086 17.1951 50.6359 9.80418 45.4904 5.86781C40.4177 1.98599 34.145 1.55872 28.6541 1.64054C22.1177 1.74963 16.9541 3.83145 13.3086 7.82236C9.27225 12.2405 7.2177 19.2678 8.02679 25.7678C5.32679 26.9769 2.83588 29.3496 1.7177 31.8405C0.535885 34.4678 0.38134 37.6315 1.28134 40.5224C2.19952 43.486 5.64498 46.8769 9.12679 48.2405C10.2268 48.6769 11.2904 48.886 12.2904 48.886C13.3904 48.886 14.4086 48.6224 15.3177 48.1042C15.5722 47.9587 15.8086 47.786 16.0086 47.586C17.3177 46.3042 17.4268 34.9133 16.8722 30.2769C16.4813 26.9769 15.8359 26.186 15.2541 25.8405C15.2086 25.8133 15.1632 25.7951 15.1177 25.7678C15.1177 25.7496 15.1268 25.7314 15.1177 25.7133C14.5541 21.4496 15.8813 16.8405 18.4995 13.9678C20.8177 11.4314 24.1359 10.1042 28.3813 10.0405C32.0359 9.9769 36.2177 10.2587 39.4722 12.7496C43.4813 15.8224 44.5541 21.386 44.7359 25.5224C44.745 25.6224 44.7722 25.7224 44.8086 25.8042C44.7813 25.8224 44.7541 25.8314 44.7359 25.8405C44.1632 26.186 43.5177 26.9769 43.1177 30.2769C42.5632 34.9133 42.6722 46.3042 43.9813 47.586C44.1813 47.786 44.4086 47.9496 44.6632 48.0951C42.8086 52.1769 39.2541 53.5133 34.8268 51.7587C34.3359 51.5587 33.8541 51.2405 33.345 50.8951C32.5904 50.386 31.8086 49.8678 30.845 49.6496C28.9541 49.2405 26.7086 50.0496 25.4995 51.5769C24.5541 52.7769 24.3904 54.2587 25.0632 55.6405C26.4904 58.586 30.9177 58.9587 34.1904 58.9587C34.8086 58.9587 35.3904 58.9496 35.8995 58.9314L36.2813 58.9224C43.9086 58.7587 50.0995 54.4769 52.845 47.4496C52.8722 47.3678 52.8813 47.286 52.8904 47.2133C55.5995 45.5496 57.9722 42.8951 58.7177 40.5133C59.6177 37.6405 59.4541 34.4769 58.2813 31.8496ZM14.7177 46.386C14.6359 46.4587 14.5359 46.5314 14.4359 46.586C12.845 47.4951 11.0177 47.0951 9.76316 46.6042C6.52679 45.3315 3.63588 42.1587 2.96316 40.0042C2.19043 37.5224 2.32679 34.8042 3.32679 32.5678C4.24498 30.5224 6.73588 27.9587 9.7177 27.0133C10.2995 26.8314 11.0086 26.6769 11.7813 26.6769C12.6086 26.6769 13.4904 26.8496 14.3359 27.3496C15.7813 28.6678 15.6813 44.3405 14.7177 46.386ZM40.545 11.3587C36.8632 8.53145 32.3086 8.22236 28.3541 8.28599C23.6086 8.35872 19.8541 9.8769 17.1995 12.7951C14.4268 15.8405 12.9268 20.5769 13.2813 25.086C12.1722 24.8405 10.9722 24.8769 9.73588 25.186C9.10861 19.286 10.9904 12.9951 14.6177 9.02236C17.9268 5.39509 22.6541 3.51327 28.6904 3.41327C33.8722 3.33145 39.7813 3.72236 44.4177 7.2769C50.2995 11.786 51.645 20.2042 51.845 25.7405C51.4995 25.5951 51.1541 25.4496 50.8086 25.3405C49.2813 24.8587 47.8177 24.8042 46.4813 25.1496C46.2359 20.6678 44.9904 14.7678 40.545 11.3587ZM36.2541 57.186L35.8632 57.1951C33.2632 57.2496 27.8541 57.3769 26.645 54.8951C26.2632 54.1133 26.345 53.3769 26.8813 52.6951C27.6632 51.7042 29.2359 51.1315 30.4632 51.3951C31.0995 51.5315 31.7086 51.9405 32.3541 52.3769C32.9177 52.7587 33.4995 53.1496 34.1722 53.4133C39.4813 55.5224 44.0813 53.7224 46.3086 48.7405C46.7541 48.8405 47.2177 48.9042 47.6995 48.9042C48.5904 48.9042 49.5268 48.7224 50.4995 48.386C47.7722 53.786 42.5632 57.0496 36.2541 57.186ZM57.0359 40.0042C56.3632 42.1678 53.4722 45.3405 50.2359 46.6042C48.9813 47.0951 47.1541 47.4951 45.5631 46.586C45.4632 46.5314 45.3632 46.4587 45.2813 46.386C44.3177 44.3405 44.2268 28.6678 45.645 27.3678C47.3086 26.386 49.0904 26.6314 50.2904 27.0133C53.2722 27.9587 55.7631 30.5224 56.6813 32.5678C57.6722 34.8133 57.8086 37.5224 57.0359 40.0042Z"
                  fill="#2A9D8F" />
                <path
                  d="M8.81675 29.8948C8.17129 30.0766 7.33493 30.5312 6.61675 31.2766C5.90766 32.0221 5.48948 32.8857 5.34402 33.5403C5.18948 34.1948 5.27129 34.6221 5.43493 34.6585C5.78948 34.7312 6.33493 33.3766 7.53493 32.1494C8.69857 30.8948 10.0349 30.2857 9.94402 29.9312C9.88947 29.7675 9.4622 29.713 8.81675 29.8948Z"
                  fill="#2A9D8F" />
                <path
                  d="M54.5285 36.9315C54.3467 36.9769 54.4013 37.5769 54.2558 38.4406C54.1285 39.3042 53.7558 40.4769 52.9104 41.4406C52.0649 42.3951 50.9467 42.9133 50.1013 43.1496C49.2558 43.3951 48.6649 43.4224 48.6376 43.6042C48.6104 43.7587 49.1922 44.0678 50.2376 44.0315C51.2649 44.0042 52.7467 43.5224 53.8467 42.2769C54.9376 41.0315 55.2376 39.4951 55.1376 38.4769C55.0649 37.4224 54.6831 36.8769 54.5285 36.9315Z"
                  fill="#2A9D8F" />
              </svg>
            </span>
            <div class="trucker__footer-info-headset-text">
              <span class="trucker__footer-info-color-text">PERFECT SOLUTION From <span
                  class="trucker__footer-info-green-text">Land Owner</span></span><br>
              <a href="tel:926668880000" class="trucker__footer-info-number">+92 666 888 0000</a>
            </div>
          </div>
        </div>
      </div>
      <div class="trucker__footer-copyright-text-wrapper wow fadeInRight">
        <p class="trucker__footer-copyright-text"> <span class="trucker__copyright-text-highlight">© 2023</span>
          website_stock . All Rights Reserved.</p>
        <div class="trucker__footer-copyright-icons">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <div class="trucker__footer-copyright-menu">
          <a href="#">Terms of Use</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Footer Area -->

  <!-- Start Mobile Menu -->
  <div class="trucker__mobile-menu">
    <div class="trucker__menu-header">
      <div class="trucker__logo">
        <a href="index.html">
          <img src="assets/images/logo/logo.svg" alt="Trucker - Transport Courier & Logistics Html Template">
        </a>
      </div>
      <button class="trucker__close-btn"><i class="fa-sharp fa-light fa-xmark"></i></button>
    </div>

    <div class="trucker__mobile-menu-search">
      <form action="#">
        <input type="text" placeholder="Search Here">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>

    <div class="trucker__mobile-menu-btn">
      <a href="#" class="trucker__btn-style-1">Track Order <i class="fa-light fa-arrow-up-right"></i></a>
    </div>

    <nav>
      <ul class="trucker__nav-list">
        <li class="trucker__nav-item">
          <a href="#" class="trucker__nav-link" onclick="return false;">
            Home
          </a>
        
        </li>
        <li class="trucker__nav-item">
          <a href="about.html" class="trucker__nav-link">About</a>
        </li>
       

        @if (Route::has('login'))
            
       @auth
           
     
        <li class="trucker__nav-item">
          <a href="{{route('dashboard')}}" class="trucker__nav-link" onclick="return false;">
            Dashboard
          </a>
          
        </li>

        @endauth
        @endif
       
        <li class="trucker__nav-item">
          <a href="contact.html" class="trucker__nav-link">Contact</a>
        </li>
      </ul>
    </nav>
    <div class="mobile-menu-contact-info">
      <a href="mailto:trucker@yourdomain.com"
        class="trucker__header-topbar-info trucker__fs-15 trucker__fw-400 trucker__white"><i
          class="fa-sharp fa-light fa-envelope"></i> trucker@yourdomain.com</a>
      <a href="tel:880-61234567890" class="trucker__header-topbar-info trucker__fs-15 trucker__fw-400 trucker__white"><i
          class="fa-light fa-phone"></i> +880-61234567890</a>
    </div>
    <div class="mobile-menu-social-media">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <div class="trucker__mobile-menu-copyright">
      <p class="trucker__mobile-menu-copyright-text">© 2025 <a href="#">website_stock</a> . All Rights Reserved.</p>
    </div>
  </div>
  <!-- End Mobile Menu -->

  <!-- Start Overlay Add -->
  <div class="trucker__overlay"></div>
  <!-- End Overlay Add -->

  <!-- Start Search Popup -->
  <div class="search-popup">
    <button class="close-search" aria-label="Close search">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <div class="search-container">
      <form class="search-form" id="searchForm">
        <input type="text" class="search-input" placeholder="Search..." autocomplete="off">
        <button type="submit" class="search-submit">Search</button>
      </form>
    </div>
  </div>
  <!-- End Search Popup -->



  <!--Start Js Files-->
  <script defer src="assets/js/jquery.min.js"></script>
  <script defer src="assets/js/bootstrap.min.js"></script>
  <script defer src="assets/js/wow.js"></script>
  <script defer src="assets/js/magnific-popup.js"></script>
  <script defer src="assets/js/nice-select.js"></script>
  <script defer src="assets/js/swiper.js"></script>
  <script defer src="assets/js/odometer.min.js"></script>
  <script defer src="assets/js/jarallax.min.js"></script>
  <script defer src="assets/js/imagesloaded-pkgd.js"></script>
  <script defer src="assets/js/script.js"></script>

  <!-- End Js File -->
</body>

</html>