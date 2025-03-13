<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/vendors.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <title>Educrat</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->


  <main class="main-content bg-beige-1">

    <header data-anim="fade" data-add-bg="" class="header -base js-header">


      <div class="header__container py-10">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left">

              <div class="header__logo ">
                <a data-barba href="{{ route('home') }}">
                  <img src="assets/img/general/logo.svg" alt="logo">
                </a>
              </div>

            </div>
          </div>

        </div>
      </div>
    </header>


    <div class="content-wrapper  js-content-wrapper">

      <section class="form-page js-mouse-move-container justify-center items-center">

        <div class="form-page__content lg:py-50">
            <div class="container">
              <div class="row justify-center items-center">
                <div class="col-xl-8 col-lg-9">
                  <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                    <h3 class="text-30 lh-13">Sign Up</h3>
                    <p class="mt-10">Already have an account? <a href="{{ route('login') }}" class="text-purple-1">Log in</a></p>
  
                    <form class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('register') }}" method="POST">
                      @csrf
                      <div class="col-lg-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email address *</label>
                        <input type="email" name="email" placeholder="Enter your email">
                      </div>
                      <div class="col-lg-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username *</label>
                        <input type="text" name="name" placeholder="Enter your username">
                      </div>
                      <div class="col-lg-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password *</label>
                        <input type="password" name="password" placeholder="**********">
                      </div>
                      <div class="col-lg-6">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm Password *</label>
                        <input type="password" name="password_confirmation" placeholder="**********">
                      </div>
                      {{-- <div class="col-12">
                        <select name="type_compte" id="">
                            <option value="apprenant">Apprenant</option>
                            <option value="consultant">Consultant</option>
                        </select>
                      </div> --}}
                      <div class="col-12">
                        <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                          Register
                        </button>
                      </div>
                    </form>
  
                    @if ($errors->any())
                    <div>
                        <p style="color: red;">{{ $errors->first() }}</p>
                    </div>
                    @endif

                    {{-- <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Or sign in using</div>
  
                    <div class="d-flex x-gap-20 items-center justify-between pt-20">
                      <div><button class="button -sm px-24 py-20 -outline-blue-3 text-blue-3 text-14">Log In via Facebook</button></div>
                      <div><button class="button -sm px-24 py-20 -outline-red-3 text-red-3 text-14">Log In via Google+</button></div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>


    </div>
  </main>

  <!-- JavaScript -->
  <script src="assets/js/vendors.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>