(function ($, window) {
  "use strict";
  var mtJs = {
    m: function () {
      mtJs.d();
      mtJs.methods();
    },

    d: function () {
      this._window = $(window);
      this._document = $(document);
      this._body = $("body");
      this._html = $("html");
    },
    methods: function () {
      this.inlineCssActivation();
      this.mobileMenuActivation();
      this.wowActivation();
      this.headerSticky();
      this.swiperActivation();
      this.videoPopup();
      this.niceSelections();
      this.searchPopupActivation();
      this.topToScroll();
      this.cricleProgress();
      this.jarallaxAactivation();
      this.counterActivation();
      this.footerNewslatterCheckmark();
      this.faqActivation();
      this.rangeBarActivation();
      this.sitePreLoader();
    },

    // Start Preloader
    sitePreLoader: function () {
      $(window).on('load', function () {
        $("#trucker__preloader").delay(500).fadeOut(300);
      });
    },
    // End Preloader

    // Start Swiper Slider
    swiperActivation: function () {

      // Start Hero Slider Home 2
      $(document).ready(function () {
        var interleaveOffset = 0.5;
        var swiper = new Swiper(".trucker__hero-slider", {
          slidePreview: 1,
          loop: true,
          speed: 1000,
          parallax: true,
          effect: "fade",
          watchSlidesProgress: true,

          navigation: {
            nextEl: ".trucker__prev-slider-btn",
            prevEl: ".trucker__next-slider-btn",
          },
        });
      });
      // End Hero Slider Home 2

      // Start Brand Area Home 2
      $(document).ready(function () {
        var swiper = new Swiper(".trukcer__brand-items", {
          slidesPerView: 5,
          loop: true,
          breakpoints: {
            1920: {
              slidePreview: 5,
            },
            992: {
              slidePreview: 5,
            },
            991: {
              slidesPerView: 3,
            },
            651: {
              slidesPreview: 3,
            },
            650: {
              slidesPreview: 2,
            },
            0: {
              slidesPerView: 2,
            },
          },
        });
      });
      // End Brand Area Home 2

      // Start Brand Area Home 1
      $(document).ready(function () {
        var swiper = new Swiper(".trucker__barnd-item-home", {
          slidesPerView: 5,
          loop: true,
          breakpoints: {
            1920: {
              slidesPreview: 5,
            },
            993: {
              slidesPreview: 5,
            },
            992: {
              slidesPreview: 4,
            },
            768: {
              slidesPreview: 4,
            },
            767: {
              slidesPreview: 3,
            },
            576: {
              slidesPreview: 3,
            },
            575: {
              slidesPreview: 2,
            },
            // 390:{
            //   slidesPreview:2,
            // },
            // 389:{
            //   slidesPreview:1,
            // },
            0: {
              slidesPerView: 2,
            },
          },
        });
      });
      // End Brand Area Home 1

      // Start Delivary System Home 2
      $(document).ready(function () {
        var swiper = new Swiper(".trucker__delivary-way", {
          slidesPerView: 4,
          spaceBetween: 15,
          loop: true,
          breakpoints: {
            1400: {
              slidePreview: 4,
            },
            1399: {
              slidesPerView: 3,
            },
            1056: {
              slidesPerView: 3,
            },
            1055: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 2,
            },
            767: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
            0: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
          },
          pagination: {
            el: ".trucker__delivary-bullet-point",
            clickable: true,
          },
        });
      });
      // End Delivary System Home 2

      // Start Testimonial Area Home 2
      $(document).ready(function () {
        var swiper = new Swiper(".trucker__testimonial-home-2", {
          slidesPerView: 2,
          spaceBetween: 15,
          loop: true,
          navigation: {
            nextEl: ".trucker__prev-slider-testimonial-btn",
            prevEl: ".trucker__next-slider-testimonial-btn",
          },
          breakpoints: {
            951: {
              slidesPerView: 2,
            },
            950: {
              slidesPerView: 1,
            },
            0: {
              slidesPerView: 1,
            },
          },
        });
      });
      // End Testimonial Area Home 2

    },
    // End Swiper Slider

    // Start Video Popup
    videoPopup: function () {
      $(document).ready(function () {
        $('.trucker__popup-video').magnificPopup({
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
      });
    },
    // End Video Popup

    // Start Range Bar Activation
    rangeBarActivation: function () {
      $(document).ready(function () {
        $('.rangeSlider').on('input', function () {
          const value = $(this).val();
          $('.rangeValue').text(value);
          const percentage = (value / $(this).attr('max')) * 100;
          $(this).css('background', `linear-gradient(to right, #062E39 ${percentage}%, #FFFFFF ${percentage}%)`);
        });
      });


    },
    // End Range Bar Activation

    // Start Faq Activation
    faqActivation: function () {
      $(document).ready(function () {
        // FAQ Style 1
        $('.trucker__faq-style-1 .trucker__faq-question').click(function () {
          toggleFAQ($(this), true);
        });

        // FAQ Style 2
        $('.trucker__faq-style-2 .trucker__faq-question').click(function () {
          toggleFAQ($(this), false);
        });

        function toggleFAQ($question, isStyle1) {
          const $faqItem = $question.parent();
          const $answer = $question.next('.trucker__faq-answer');
          const $faqStyle = $faqItem.parent();

          if ($answer.is(':visible')) {
            $answer.slideUp(200);
            toggleIcon($question, isStyle1, false);
          } else {
            $faqStyle.find('.trucker__faq-answer').slideUp(200);
            $faqStyle.find('.trucker__faq-question').each(function () {
              toggleIcon($(this), isStyle1, false);
            });

            $answer.slideDown(200);
            toggleIcon($question, isStyle1, true);
          }
        }

        function toggleIcon($question, isStyle1, isOpen) {
          if (isStyle1) {
            $question.find('.trucker__eye-icon').toggleClass('trucker__hidden', isOpen);
            $question.find('.trucker__eye-off-icon').toggleClass('trucker__hidden', !isOpen);
          } else {
            $question.find('.trucker__chevron-right').toggleClass('trucker__hidden', isOpen);
            $question.find('.trucker__chevron-down').toggleClass('trucker__hidden', !isOpen);
          }
        }
      });
    },
    // End Faq Activation

    // Start Footer Newslatter Checked
    footerNewslatterCheckmark: function () {
      $(document).ready(function () {
        $('.trucker__agreement-container').on('click', function () {
          $('.trucker__checkbox').toggleClass('trucker__checked');
        });
      });
    },
    // End Footer Newslatter Checked

    // Start Circle Progress
    cricleProgress: function () {
      $(document).ready(function () {
        let animated = false;

        function animateProgress($element) {
          const value = parseInt($element.data('value'));
          let currentValue = 0;
          const duration = 2000; // 2 seconds
          const steps = 60;
          const increment = value / steps;

          const interval = setInterval(() => {
            currentValue += increment;
            if (currentValue >= value) {
              currentValue = value;
              clearInterval(interval);
            }

            // Only update the circle fill animation
            const degrees = (currentValue / 100) * 360;
            $element.css('background', `conic-gradient(#2A9D8F ${degrees}deg, #E1E1E1 ${degrees}deg)`);
          }, duration / steps);
        }

        $(window).on('scroll', function () {
          const $progress = $('.trucker__skill-area-home-2');

          if ($progress.length) {
            const scrollPosition = $(window).scrollTop() + $(window).height();
            const elementPosition = $progress.offset().top;

            if (scrollPosition > elementPosition && !animated) {
              animated = true;
              $('.trucker__circular-progress').each(function () {
                animateProgress($(this));
              });
            }
          }
        });

      });
    },
    // End Circle Progress

    // Start Jarallax Activation
    jarallaxAactivation: function () {
      $(document).ready(function () {
        $('.jarallax').jarallax({
          speed: 0.4,
        });
      });
    },
    // End Jarallax Activation

    // Start Counter Area
    counterActivation: function () {
      $(document).ready(function () {
        $(".odometer").each(function () {
          var countNumber = $(this).attr("data-count");
          setTimeout(() => {
            $(this).html(countNumber);
          }, 1000);
        });
      });
    },
    // End Counter Area

    // Start Search Popup Actiavation
    searchPopupActivation: function () {
      $(document).ready(function () {
        // Open search popup
        $('.search-trigger').on('click', function () {
          $('.search-popup').addClass('active');
          setTimeout(() => {
            $('.search-input').focus();
          }, 100);
        });

        // Close search popup - Fixed to work with close button
        $('.close-search').on('click', function (e) {
          e.stopPropagation();
          $('.search-popup').removeClass('active');
        });

        // Close on background click
        $('.search-popup').on('click', function (e) {
          if ($(e.target).hasClass('search-popup')) {
            $(this).removeClass('active');
          }
        });

        // Prevent popup from closing when clicking inside search container
        $('.search-container').on('click', function (e) {
          e.stopPropagation();
        });

        // Handle search form submission
        $('#searchForm').on('submit', function (e) {
          e.preventDefault();
          const searchTerm = $('.search-input').val().trim();
          if (searchTerm) {
            console.log('Searching for:', searchTerm);
            // Add your search logic here
          }
        });

        // Close popup on escape key
        $(document).on('keydown', function (e) {
          if (e.key === 'Escape') {
            $('.search-popup').removeClass('active');
          }
        });
      });
    },
    // End Search Popup Activation

    // Start Top To Scroll 
    topToScroll: function () {
      $(document).ready(function () {
        var scrollPath = document.querySelector(".scroll-up path");
        var pathLength = scrollPath.getTotalLength();
        scrollPath.style.transition = scrollPath.style.WebkitTransition = "none";
        scrollPath.style.strokeDasharray = pathLength + " " + pathLength;
        scrollPath.style.strokeDashoffset = pathLength;
        scrollPath.getBoundingClientRect();
        scrollPath.style.transition = scrollPath.style.WebkitTransition =
          "stroke-dashoffset 10ms linear";
        var updatescroll = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var scroll = pathLength - (scroll * pathLength) / height;
          scrollPath.style.strokeDashoffset = scroll;
        };
        updatescroll();
        $(window).scroll(updatescroll);
        var offset = 50;
        var duration = 950;
        jQuery(window).on("scroll", function () {
          if (jQuery(this).scrollTop() > offset) {
            jQuery(".scroll-up").addClass("active-scroll");
          } else {
            jQuery(".scroll-up").removeClass("active-scroll");
          }
        });
        jQuery(".scroll-up").on("click", function (event) {
          event.preventDefault();
          jQuery("html, body").animate(
            {
              scrollTop: 0,
            },
            duration
          );
          return false;
        });
      });
    },
    // End Top To Scroll

    // Start Header Sticky Activation
    headerSticky: function () {
      $(document).ready(function () {
        $(window).on("scroll", function () {
          var ScrollBarPostion = $(window).scrollTop();
          if (ScrollBarPostion > 100) {
            $(".trucker__header-menu").addClass("trucker__header-sticky");
          } else {
            $(".trucker__header-menu").removeClass("trucker__header-sticky");
          }
        })
      })
    },
    // End Header Sticky Activation

    // Start Mobile Menu Activation
    mobileMenuActivation: function () {
      $(document).ready(function () {
        $('.trucker__mobile-menu-bar').click(function (e) {
          var rect = e.target.getBoundingClientRect();
          var x = e.clientX - rect.left;
          var y = e.clientY - rect.top;

          $('.trucker__overlay').css({
            '--x': x + 'px',
            '--y': y + 'px'
          }).addClass('trucker__animating');

          setTimeout(function () {
            $('.trucker__mobile-menu, .trucker__overlay').addClass('trucker__active');
            animateNavItems();
          }, 50);

          setTimeout(function () {
            $('.trucker__overlay').removeClass('trucker__animating');
          }, 500);
        });

        $('.trucker__close-btn, .trucker__overlay').click(function () {
          $('.trucker__mobile-menu, .trucker__overlay').removeClass('trucker__active');
        });

        $('.trucker__nav-link').click(function (e) {
          e.preventDefault();

          var $submenu = $(this).next('.trucker__submenu');
          var $toggleBtn = $(this).find('.trucker__toggle-btn');

          // Close all other submenus
          $('.trucker__submenu').not($submenu).slideUp().removeClass('trucker__active');
          $('.trucker__toggle-btn').not($toggleBtn).removeClass('trucker__active');

          // Toggle current submenu
          $submenu.slideToggle(function () {
            if ($submenu.is(':visible')) {
              $submenu.addClass('trucker__active');
              $toggleBtn.addClass('trucker__active');
              animateSubmenuItems($submenu);
            } else {
              $submenu.removeClass('trucker__active');
              $toggleBtn.removeClass('trucker__active');
            }
          });
        });

        function animateNavItems() {
          $('.trucker__nav-item').each(function (index) {
            $(this).css({
              'animation': `fadeInRight 0.3s ease forwards ${index * 0.1}s`,
              'opacity': '0'
            });
          });
        }

        function animateSubmenuItems($submenu) {
          $submenu.find('.trucker__submenu-item').each(function (index) {
            $(this).css({
              'animation': `fadeInDown 0.3s ease forwards ${index * 0.1}s`,
              'opacity': '0'
            });
          });
        }
      });
    },

    // End Mobile Menu Activation

    // Start Inline Css Activation
    inlineCssActivation: function () {
      $(document).ready(function () {
        $("[data-background]").each(function () {
          $(this).css(
            "background-image",
            "url( " + $(this).attr("data-background") + "  )"
          );
        });
      });
    },
    // End Inline Css Activation

    // Start Nice Select Activation
    niceSelections: function () {
      $(document).ready(function () {
        $(".trucker__language-selection, .trucker__booking-type-one, .trucker__booking-type-two").niceSelect();
      });
    },
    // End Nice Select Activation

    // Start Wow Activation
    wowActivation: function () {
      $(document).ready(function () {
        new WOW().init();
      });
    },
    // End Wow Activation

  };

  mtJs.m();
})(jQuery, window);
