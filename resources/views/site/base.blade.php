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
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content  ">

    <header data-anim="fade" data-add-bg="bg-dark-1" class="header -type-1 js-header">


      <div class="header__container">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left">

              <div class="header__logo ">
                <a data-barba href="{{ route('home') }}">
                  <img src="{{ asset('storage/' . $parametre->logo) }}" alt="logo">
                </a>
              </div>


              <div class="header__explore text-green-1 ml-60 xl:ml-30 xl:d-none">
                <a href="#" class="d-flex items-center" data-el-toggle=".js-explore-toggle">
                  <i class="icon icon-explore mr-15"></i>
                  Explore
                </a>

                <div class="explore-content py-25 rounded-8 bg-white toggle-element js-explore-toggle">

                  {{-- <div class="explore__item">
                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                      Design<div class="icon-chevron-right text-11"></div>
                    </a>
                    <div class="explore__subnav rounded-8">
                      <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                    </div>
                  </div> --}}

                  @if($categories_cours->count() > 0)
                  @foreach ($categories_cours as $categorie_cours)
                  <div class="explore__item">
                    <a href="" class="text-dark-1">{{ $categorie_cours->nom }}</a>
                  </div>
                  @endforeach
                  @endif

                </div>
              </div>

            </div>
          </div>


          <div class="header-menu js-mobile-menu-toggle ">
            <div class="header-menu__content">
              <div class="mobile-bg js-mobile-bg"></div>

              <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                <a href="{{ route('login') }}" class="text-dark-1">Log in</a>
                <a href="{{ route('register') }}" class="text-dark-1 ml-30">Sign Up</a>
              </div>
              
              <div class="menu js-navList">
                <ul class="menu__nav text-white -is-active">

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

                      <li><a href="">Solution 1</a></li>

                      <li><a href="">Solution 2</a></li>

                    </ul>
                  </li>

                  <li class="menu-item-has-children">
                    <a data-barba href="#">Ressources<i class="icon-chevron-right text-13 ml-10"></i></a>
                    <ul class="subnav">
                      <li class="menu__backButton js-nav-list-back">
                        <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Ressources</a>
                      </li>

                      <li><a href="">Ressources 1</a></li>

                      <li><a href="">Ressources 2</a></li>

                    </ul>
                  </li>

                  <li> <a data-barba href="{{ route('contact') }}">Contact</a></li>
                </ul>

              </div>

              <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                <div class="mobile-footer__number">
                  <div class="text-17 fw-500 text-dark-1">Telephone</div>
                  <div class="text-17 fw-500 text-purple-1">{{ $parametre->telephone ?? 'N/A' }}</div>
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


          <div class="col-auto">
            <div class="header-right d-flex items-center">
              <div class="header-right__icons text-white d-flex items-center">

                <div class="d-none xl:d-block ml-20">
                  <button class="text-white items-center" data-el-toggle=".js-mobile-menu-toggle">
                    <i class="text-11 icon icon-mobile-menu"></i>
                  </button>
                </div>

              </div>

              {{-- <div class="header-right__buttons d-flex items-center ml-30 md:d-none">
                <a href="{{ route('login') }}" class="button -underline text-white">Log in</a>
                <a href="{{ route('register') }}" class="button -sm -white text-dark-1 ml-30">Sign Up</a>
              </div> --}}

              <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 md:d-none">
                @guest
                  <a href="{{ route('login') }}" class="button -underline text-white">Log in</a>
                  <a href="{{ route('register') }}" class="button px-25 h-50 -white text-dark-1 -rounded ml-30 xl:ml-20">Sign Up</a>
                @else
                  <a href="{{ route('dashboard') }}" class="button -underline text-white">Mon Espace</a>
                  <a href="{{ route('logout') }}" class="button px-25 h-50 -white text-dark-1 -rounded ml-30 xl:ml-20">Deconnexion</a>
                @endguest
                </div>
                
            </div>
          </div>

        </div>
      </div>
    </header>

    <div class="content-wrapper  js-content-wrapper">
      @yield('content')

      @include('site.includes.footer')

    </div>

  </main>

  <script src="{{ asset('assets/js/vendors.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
