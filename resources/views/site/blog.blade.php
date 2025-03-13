@extends('site.base')
@section('title', 'Blog')
@section('content')

<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="{{ route('home') }}">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="{{ route('blog') }}">All courses</a>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-header -type-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">

              <h1 class="page-header__title">Latest News</h1>

            </div>

            <div data-anim="slide-up delay-2">

              <p class="page-header__text">We’re on a mission to deliver engaging, curated courses at a reasonable price.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row y-gap-30">

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/1.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">Eco-Education in Our Lives: We Can Change the Future</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/2.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">Engendering a culture of professional development</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/3.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">Increasing engagement with Instagram</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/4.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">How to design a simple, yet unique and memorable brand identity</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/5.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">5 marketing trends that you should be prepared for in 2022</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/6.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">8 great design trends that are making a come-back in 2021</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/7.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">How to be more creative: 5 cool tips to find inspiration everywhere</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/8.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">8 interesting programming languages you should be paying attention to</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
              <a href="blog-single.html" class="blogCard -type-1">
                <div class="blogCard__image">
                  <img class="w-1/1 rounded-8" src="assets/img/blog-list/9.png" alt="image">
                </div>
                <div class="blogCard__content mt-20">
                  <div class="blogCard__category">EDUCATION</div>
                  <h4 class="blogCard__title text-18 lh-15 fw-500 mt-5">19 ways to optimize your ad marketing budget efficiently</h4>
                  <div class="blogCard__date mt-5">December 16, 2022</div>
                </div>
              </a>
            </div>


          </div>

          <div class="row justify-center pt-60 lg:pt-40">
            <div class="col-auto">
              <div class="pagination -buttons">
                <button class="pagination__button -prev">
                  <i class="icon icon-chevron-left"></i>
                </button>

                <div class="pagination__count">
                  <a href="#">1</a>
                  <a class="-count-is-active" href="#">2</a>
                  <a href="#">3</a>
                  <span>...</span>
                  <a href="#">67</a>
                </div>

                <button class="pagination__button -next">
                  <i class="icon icon-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">

          <div data-anim="slide-up delay-3" class="sidebar -blog">
            <div class="sidebar__item">
              <h5 class="sidebar__title">Categories</h5>

              <div class="sidebar-content -list">

                <a class="text-dark-1" href="#">College</a>

                <a class="text-dark-1" href="#">Gym</a>

                <a class="text-dark-1" href="#">High School</a>

                <a class="text-dark-1" href="#">Primary</a>

                <a class="text-dark-1" href="#">School</a>

                <a class="text-dark-1" href="#">University</a>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="sidebar__title">Recent Posts</h5>

              <div class="sidebar-content -recent y-gap-20">

                <div class="sidebar-recent d-flex items-center">
                  <div class="sidebar-recent__image mr-15">
                    <img src="assets/img/blog-list/1.png" alt="image">
                  </div>

                  <div class="sidebar-recent__content">
                    <h5 class="text-15 lh-15 fw-500">Find the Right Learning Path for your</h5>
                    <div class="text-13 lh-1 mt-5">April 13, 2022</div>
                  </div>
                </div>

                <div class="sidebar-recent d-flex items-center">
                  <div class="sidebar-recent__image mr-15">
                    <img src="assets/img/blog-list/2.png" alt="image">
                  </div>

                  <div class="sidebar-recent__content">
                    <h5 class="text-15 lh-15 fw-500">Find the Right Learning Path for your</h5>
                    <div class="text-13 lh-1 mt-5">April 13, 2022</div>
                  </div>
                </div>

                <div class="sidebar-recent d-flex items-center">
                  <div class="sidebar-recent__image mr-15">
                    <img src="assets/img/blog-list/3.png" alt="image">
                  </div>

                  <div class="sidebar-recent__content">
                    <h5 class="text-15 lh-15 fw-500">Find the Right Learning Path for your</h5>
                    <div class="text-13 lh-1 mt-5">April 13, 2022</div>
                  </div>
                </div>

              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="sidebar__title">Tags</h5>

              <div class="sidebar-content -tags">

                <div class="sidebar-tag">
                  <a class="text-11 fw-500 text-dark-1" href="#">Courses</a>
                </div>

                <div class="sidebar-tag">
                  <a class="text-11 fw-500 text-dark-1" href="#">Learn</a>
                </div>

                <div class="sidebar-tag">
                  <a class="text-11 fw-500 text-dark-1" href="#">Online</a>
                </div>

                <div class="sidebar-tag">
                  <a class="text-11 fw-500 text-dark-1" href="#">Education</a>
                </div>

                <div class="sidebar-tag">
                  <a class="text-11 fw-500 text-dark-1" href="#">LMS</a>
                </div>

                <div class="sidebar-tag">
                  <a class="text-11 fw-500 text-dark-1" href="#">Training</a>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
