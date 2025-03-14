<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <!-- Required meta tags --> --}}
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- <!-- Google fonts --> --}}
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

  {{-- <!-- Stylesheets --> --}}
  <link rel="stylesheet" href="{{ asset('assets/css/vendors.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

  <title>@yield('title') | KPC OURO</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
  {{-- <!-- preloader start --> --}}
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content  ">

    <header data-anim="fade" data-add-bg="bg-white" class="header -type-5 js-header">

      <div class="d-flex items-center bg-white py-10 border-bottom-light">
        <div class="header__container">
          <div class="row y-gap-5 justify-between items-center">
            <div class="col-auto">
              <div class="d-flex x-gap-40 y-gap-10 items-center">
                <div class="d-flex items-center text-dark-1 md:d-none">
                  <div class="icon-phone mr-10"></div>
                  <div class="text-13 lh-1">(00) 242 844 39 88</div>
                </div>
                <div class="d-flex items-center text-dark-1">
                  <div class="icon-email mr-10"></div>
                  <div class="text-13 lh-1">hello@educrat.com</div>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="d-flex x-gap-30 y-gap-10">
                <div>
                  <div class="d-flex x-gap-20 items-center text-dark-1">
                    <a href="#"><i class="icon-facebook text-11"></i></a>
                    <a href="#"><i class="icon-twitter text-11"></i></a>
                    <a href="#"><i class="icon-instagram text-11"></i></a>
                    <a href="#"><i class="icon-linkedin text-11"></i></a>
                  </div>
                </div>

                <div class="d-flex items-center text-dark-1 text-13 sm:d-none">
                  {{-- <span class="mr-2">{{ __('messages.language') }}:</span> --}}
                  <a href="{{ url('lang/en') }}" class="text-primary mx-2 {{ app()->getLocale() == 'en' ? 'font-weight-bold' : '' }}">
                      English
                  </a> | 
                  <a href="{{ url('lang/fr') }}" class="text-primary mx-2 {{ app()->getLocale() == 'fr' ? 'font-weight-bold' : '' }}">
                      Français
                  </a>
                  {{-- <i class="icon-chevron-down text-9 ml-10"></i> --}}
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      dump(App::getLocale());

      ?>
      
      <div class="header__container py-10">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left d-flex items-center">

              <div class="header__logo ">
                <a data-barba href="{{ route('home') }}">
                  <img src="{{ asset('assets/img/general/logo-dark.svg') }}" alt="logo">
                </a>
              </div>

              <div class="header-menu js-mobile-menu-toggle ">
                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>

                  <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                    <a href="{{ route('login') }}" class="text-dark-1">Log in</a>
                    <a href="{{ route('register') }}" class="text-dark-1 ml-30">Sign Up</a>
                  </div>

                  <div class="menu js-navList">
                    <ul class="menu__nav text-dark-1 ml-50 xl:ml-30 -is-active">

                      <li> <a data-barba href="{{ route('home') }}">Home</a></li>

                      <li> <a data-barba href="{{ route('about') }}">About</a></li>

                      <li> <a data-barba href="{{ route('cours') }}">Courses</a></li>

                      <li> <a data-barba href="{{ route('blog') }}">Blog</a></li>

                      <li class="menu-item-has-children">
                        <a data-barba href="#">Nos solutions<i class="icon-chevron-right text-13 ml-10"></i></a>
                        <ul class="subnav">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Nos solutions</a>
                          </li>

                          <li><a href="blog-list-1.html">Solution 1</a></li>

                          <li><a href="blog-list-2.html">Solution 2</a></li>

                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a data-barba href="#">Ressources<i class="icon-chevron-right text-13 ml-10"></i></a>
                        <ul class="subnav">
                          <li class="menu__backButton js-nav-list-back">
                            <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Ressources</a>
                          </li>

                          <li><a href="blog-list-1.html">Ressources 1</a></li>

                          <li><a href="blog-list-2.html">Ressources 2</a></li>

                        </ul>
                      </li>

                      <li> <a data-barba href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                  </div>

                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                    <div class="mobile-footer__number">
                      <div class="text-17 fw-500 text-dark-1">Call us</div>
                      <div class="text-17 fw-500 text-purple-1">800 388 80 90</div>
                    </div>

                    <div class="lh-2 mt-10">
                      <div>329 Queensberry Street,<br> North Melbourne VIC 3051, Australia.</div>
                      <div>hi@educrat.com</div>
                    </div>

                    <div class="mobile-socials mt-10">

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-facebook"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-twitter"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-instagram"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </div>

                <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                  <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                    <div class="icon-close text-dark-1 text-16"></div>
                  </div>
                </div>

                <div class="header-menu-bg"></div>
              </div>

            </div>
          </div>


          <div class="col-auto">
            <div class="header-right d-flex items-center">
              <div class="header-right__icons text-white d-flex items-center">

                {{-- <div class="">
                  <button class="d-flex items-center text-dark-1" data-el-toggle=".js-search-toggle">
                    <i class="text-20 icon icon-search"></i>
                  </button> --}}
{{-- 
                  <div class="toggle-element js-search-toggle">
                    <div class="header-search">

                      <div class="container">
                        <div class="header-search__field">
                          <div class="icon icon-search text-dark-1"></div>
                          <input type="text" class="col-12 text-18 lh-12 text-dark-1 fw-500" placeholder="What do you want to learn?">

                          <button class="d-flex items-center justify-center size-40 rounded-full bg-purple-3" data-el-toggle=".js-search-toggle">
                            <img src="assets/img/menus/close.svg" alt="icon">
                          </button>
                        </div>

                      </div>
                    </div>
                    <div class="header-search__bg" data-el-toggle=".js-search-toggle"></div>
                  </div> --}}
                </div>


                {{-- <div class="relative ml-30 xl:ml-20">
                  <button class="d-flex items-center text-dark-1" data-el-toggle=".js-cart-toggle">
                    <i class="text-20 icon icon-basket"></i>
                  </button>

                  <div class="toggle-element js-cart-toggle">
                    <div class="header-cart bg-white -dark-bg-dark-1 rounded-8">
                      <div class="px-30 pt-30 pb-10">

                        <div class="row justify-between x-gap-40 pb-20">
                          <div class="col">
                            <div class="row x-gap-10 y-gap-10">
                              <div class="col-auto">
                                <img src="assets/img/menus/cart/1.png" alt="image">
                              </div>

                              <div class="col">
                                <div class="text-dark-1 lh-15">The Ultimate Drawing Course Beginner to Advanced...</div>

                                <div class="d-flex items-center mt-10">
                                  <div class="lh-12 fw-500 line-through text-light-1 mr-10">$179</div>
                                  <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-auto">
                            <button><img src="assets/img/menus/close.svg" alt="icon"></button>
                          </div>
                        </div>

                        <div class="row justify-between x-gap-40 pb-20">
                          <div class="col">
                            <div class="row x-gap-10 y-gap-10">
                              <div class="col-auto">
                                <img src="assets/img/menus/cart/2.png" alt="image">
                              </div>

                              <div class="col">
                                <div class="text-dark-1 lh-15">User Experience Design Essentials - Adobe XD UI UX...</div>

                                <div class="d-flex items-center mt-10">
                                  <div class="lh-12 fw-500 line-through text-light-1 mr-10">$179</div>
                                  <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-auto">
                            <button><img src="assets/img/menus/close.svg" alt="icon"></button>
                          </div>
                        </div>

                      </div>

                      <div class="px-30 pt-20 pb-30 border-top-light">
                        <div class="d-flex justify-between">
                          <div class="text-18 lh-12 text-dark-1 fw-500">Total:</div>
                          <div class="text-18 lh-12 text-dark-1 fw-500">$659</div>
                        </div>

                        <div class="row x-gap-20 y-gap-10 pt-30">
                          <div class="col-sm-6">
                            <button class="button py-20 -dark-1 text-white -dark-button-white col-12">View Cart</button>
                          </div>
                          <div class="col-sm-6">
                            <button class="button py-20 -purple-1 text-white col-12">Checkout</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}


                <div class="d-none xl:d-block ml-20">
                  <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                    <i class="text-11 icon icon-mobile-menu"></i>
                  </button>
                </div>

              </div>

              <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 lg:d-none">
                <a href="{{ route('login') }}" class="button -underline text-dark-1">Log in</a>
                <a href="{{ route('register') }}" class="button px-25 h-50 -dark-1 text-white ml-20">Sign up</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>


    <div class="content-wrapper  js-content-wrapper mb-10">
      <br>
      @yield('content')

      <footer class="footer -type-5  bg-dark-2">
        <div class="container">
          <div class="py-30 border-top-light-15">
            <div class="row justify-center items-center y-gap-20">
              <div class="col-auto">
                <div class="d-flex items-center h-100 text-white">
                  © 2025 KPC OURO. All Right Reserved.
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>


    </div>
  </main>

  <script src="{{ asset('assets/js/vendors.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
