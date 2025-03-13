@extends('site.base')
@section('title', 'Home')
@section('content')

<section data-anim-wrap class="masthead -type-5">
    <div class="masthead__bg"></div>

    <div class="masthead__container">
      <div class="row y-gap-50 items-center">
        <div class="col-lg-6">
          <div class="masthead__content">
            {{-- <div data-anim-child="slide-up delay-2" class="text-17 lh-15 text-orange-1 fw-500 mb-10">
              Start learning for free
            </div> --}}
            <h1 data-anim-child="slide-up delay-2" class="masthead__title">
              Studies can now be done
              online much easily
            </h1>
            <p data-anim-child="slide-up delay-3" class="mt-5">
              You can access 7900+ different courses from 600<br class="lg:d-none">
              professional trainers for free
            </p>
            <div data-anim-child="slide-up delay-4" class="row items-center x-gap-20 y-gap-20 pt-20">
              <div class="col-auto">
                <a href="signup.html" class="button -md -orange-1 text-white">Join For Free</a>
              </div>
              <div class="col-auto">
                <a href="courses-list-1.html" class="button -md -outline-light-5 text-dark-1">Find Courses</a>
              </div>
            </div>

            {{-- <div data-anim-child="slide-up delay-5" class="row x-gap-20 y-gap-20 items-center pt-60 lg:pt-30">

              <div class="col-xl-4 col-auto">
                <div class="text-dark-1">
                  <div class="mr-10">
                    <img src="assets/img/home-8/hero/icons/1.svg" alt="icon">
                  </div>
                  <div class="fw-500 lh-11 mt-10">Over 12 million<br> students</div>
                </div>
              </div>

              <div class="col-xl-4 col-auto">
                <div class="text-dark-1">
                  <div class="mr-10">
                    <img src="assets/img/home-8/hero/icons/2.svg" alt="icon">
                  </div>
                  <div class="fw-500 lh-11 mt-10">More than<br> 60,000 courses</div>
                </div>
              </div>

              <div class="col-xl-4 col-auto">
                <div class="text-dark-1">
                  <div class="mr-10">
                    <img src="assets/img/home-8/hero/icons/3.svg" alt="icon">
                  </div>
                  <div class="fw-500 lh-11 mt-10">Learn anything<br> online</div>
                </div>
              </div>

            </div> --}}
          </div>
        </div>

        <div class="col-lg-6">
          <div data-anim-child="slide-up delay-6" class="masthead__image">
            <img src="assets/img/home-8/hero/image.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="layout-pt-lg layout-pb-md">
    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Top Categories</h2>

            <p class="sectionTitle__text ">10,000+ unique online course list designs</p>

          </div>

        </div>
      </div>

      <div class="row x-gap-40 y-gap-40 justify-between lg:justify-center pt-60 lg:pt-40">

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-orange-2">
              <img src="assets/img/home-8/categories/1.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">Digital<br>Marketing</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-green-2">
              <img src="assets/img/home-8/categories/2.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">Web <br>Development</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-purple-2">
              <img src="assets/img/home-8/categories/3.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">Art &<br>Humanities</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-yellow-5">
              <img src="assets/img/home-8/categories/4.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">Personal<br>Development</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-green-6">
              <img src="assets/img/home-8/categories/5.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">IT and<br>Software</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-light-10">
              <img src="assets/img/home-8/categories/6.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">Social<br>Sciences</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

        <div class="col-lg-auto col-sm-4 col-6">
          <div class="text-center">
            <div class="d-flex justify-center items-center rounded-8 size-90 mx-auto bg-green-7">
              <img src="assets/img/home-8/categories/7.svg" alt="icon">
            </div>
            <h5 class="text-17 lh-15 fw-500 mt-20">Graphic<br>Design</h5>
            <p class="text-13 lh-1 mt-10">573+ Courses</p>
          </div>
        </div>

      </div>
    </div>
  </section> --}}

  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Our Most Popular Courses</h2>

            <p class="sectionTitle__text ">10,000+ unique online course list designs</p>

          </div>


          {{-- <div class="d-flex x-gap-20 text-left pt-60 lg:pt-40">
            <div>

              <div class="dropdown js-dropdown js-category-active">
                <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1" data-el-toggle=".js-category-toggle" data-el-toggle-active=".js-category-active">
                  <span class="js-dropdown-title">Category</span>
                  <i class="icon text-9 ml-40 icon-chevron-down"></i>
                </div>

                <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                  <div class="text-14 y-gap-15 js-dropdown-list">

                    <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Lifestyle</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                  </div>
                </div>
              </div>

            </div>
            <div>

              <div class="dropdown js-dropdown js-rating-active">
                <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1" data-el-toggle=".js-rating-toggle" data-el-toggle-active=".js-rating-active">
                  <span class="js-dropdown-title">Rating</span>
                  <i class="icon text-9 ml-40 icon-chevron-down"></i>
                </div>

                <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-rating-toggle">
                  <div class="text-14 y-gap-15 js-dropdown-list">

                    <div><a href="#" class="d-block js-dropdown-link">Great</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Good</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Medium</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Low</a></div>

                  </div>
                </div>
              </div>

            </div>
            <div>

              <div class="dropdown js-dropdown js-diff-active">
                <div class="dropdown__button d-flex items-center text-14 rounded-8 px-15 py-10 text-dark-1" data-el-toggle=".js-diff-toggle" data-el-toggle-active=".js-diff-active">
                  <span class="js-dropdown-title">Diffiulty</span>
                  <i class="icon text-9 ml-40 icon-chevron-down"></i>
                </div>

                <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-diff-toggle">
                  <div class="text-14 y-gap-15 js-dropdown-list">

                    <div><a href="#" class="d-block js-dropdown-link">Hard</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Meduium</a></div>

                    <div><a href="#" class="d-block js-dropdown-link">Easy</a></div>

                  </div>
                </div>
              </div>

            </div>
          </div> --}}
        </div>
      </div>

      <div class="row y-gap-30 justify-center pt-60 lg:pt-40">

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-1">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/1.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX Design Essential Training</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-2">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/2.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                  <div>
                    <div class="px-15 rounded-200 bg-purple-1">
                      <span class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                    </div>
                  </div>

                  <div>
                    <div class="px-15 rounded-200 bg-green-1">
                      <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best sellers</span>
                    </div>
                  </div>

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python Bootcamp From Zero to Hero in Python</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-3">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/3.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete Guide (2022 Edition)</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-4">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/4.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing Course Beginner to Advanced</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-5">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/5.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography Masterclass: A Complete Guide to Photography</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-6">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/6.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing 2021: Complete Guide To Instagram</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-7">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/7.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender Creator: Learn 3D Modelling for Beginners</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div data-anim-child="slide-up delay-8">

            <a href="courses-single-1.html" class="coursesCard -type-1 border-light rounded-8">
              <div class="relative">
                <div class="coursesCard__image overflow-hidden rounded-top-8">
                  <img class="w-1/1" src="assets/img/coursesCards/8.png" alt="image">
                  <div class="coursesCard__image_overlay rounded-top-8"></div>
                </div>
                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                </div>
              </div>

              <div class="h-100 pt-15 pb-10 px-20">
                <div class="d-flex items-center">
                  <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                  <div class="d-flex x-gap-5 items-center">
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                    <div class="icon-star text-9 text-yellow-1"></div>
                  </div>
                  <div class="text-13 lh-1 ml-10">(1991)</div>
                </div>

                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial Analyst Training &amp; Investing Course</div>

                <div class="d-flex x-gap-10 items-center pt-10">

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/1.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">6 lesson</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/2.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">3h 56m</div>
                  </div>

                  <div class="d-flex items-center">
                    <div class="mr-8">
                      <img src="assets/img/coursesCards/icons/3.svg" alt="icon">
                    </div>
                    <div class="text-14 lh-1">Beginner</div>
                  </div>

                </div>

                <div class="coursesCard-footer">
                  <div class="coursesCard-footer__author">
                    <img src="assets/img/general/avatar-1.png" alt="image">
                    <div>Ali Tufan</div>
                  </div>

                  <div class="coursesCard-footer__price">
                    <div>$179</div>
                    <div>$79</div>
                  </div>
                </div>
              </div>
            </a>

          </div>
        </div>

      </div>

      <div class="row justify-center pt-60 lg:pt-40">
        <div class="col-auto">
          <a href="#" class="button -md -outline-light-5 text-dark-1">
            View All Courses
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="layout-pt-lg layout-pb-lg bg-dark-5">
    <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
        <div data-anim-child="slide-up delay-1" class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title text-white">Why learn with our courses?</h2>

            <p class="sectionTitle__text text-white">Lorem ipsum dolor sit amet, consectetur.</p>

          </div>

        </div>
      </div>

      <div class="row y-gap-30 pt-50">

        <div data-anim-child="slide-up delay-2" class="col-lg-4 col-md-6">
          <div class="stepCard -type-1 -stepCard-hover">
            <div class="stepCard__content">
              <div class="stepCard__icon">
                <i class="icon-online-learning-4 text-64 text-green-1"></i>
              </div>
              <h4 class="stepCard__title">01. Learn</h4>
              <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
          <div class="stepCard -type-1 -stepCard-hover">
            <div class="stepCard__content">
              <div class="stepCard__icon">
                <i class="icon-graduation-1 text-64 text-green-1"></i>
              </div>
              <h4 class="stepCard__title">02. Graduate</h4>
              <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
          <div class="stepCard -type-1 -stepCard-hover">
            <div class="stepCard__content">
              <div class="stepCard__icon">
                <i class="icon-working-at-home-2 text-64 text-green-1"></i>
              </div>
              <h4 class="stepCard__title">03. Work</h4>
              <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row justify-center text-center">
        <div class="col-xl-6 col-lg-7">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">What is Educrat?</h2>

            <p class="sectionTitle__text ">Learn the data skills you need online at your own pace—from non-coding essentials to data science and machine learning.</p>

          </div>

        </div>
      </div>

      <div data-anim-wrap class="row y-gap-30 justify-between items-center pt-60 lg:pt-40">
        <div data-anim-child="slide-up" class="col-lg-6">
          <img class="w-1/1" src="assets/img/home-8/what/1.png" alt="image">
        </div>

        <div class="col-xl-5 col-lg-6 col-md-9">
          <div class="d-flex flex-column y-gap-30">

            <div data-anim-child="slide-up delay-2" class="d-flex">
              <div class="d-flex justify-center items-center size-70 bg-orange-5 rounded-full">
                <img src="assets/img/home-8/what/icons/1.svg" alt="icon">
              </div>
              <div class="ml-20">
                <h5 class="text-18 lh-11 text-dark-1 fw-500">Industry expert teachers</h5>
                <p class="text-dark-1 mt-5">Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliquam id dolor .</p>
              </div>
            </div>

            <div data-anim-child="slide-up delay-3" class="d-flex">
              <div class="d-flex justify-center items-center size-70 bg-orange-5 rounded-full">
                <img src="assets/img/home-8/what/icons/2.svg" alt="icon">
              </div>
              <div class="ml-20">
                <h5 class="text-18 lh-11 text-dark-1 fw-500">Up-to-date course content</h5>
                <p class="text-dark-1 mt-5">Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliquam id dolor .</p>
              </div>
            </div>

            <div data-anim-child="slide-up delay-4" class="d-flex">
              <div class="d-flex justify-center items-center size-70 bg-orange-5 rounded-full">
                <img src="assets/img/home-8/what/icons/3.svg" alt="icon">
              </div>
              <div class="ml-20">
                <h5 class="text-18 lh-11 text-dark-1 fw-500">Students community</h5>
                <p class="text-dark-1 mt-5">Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliquam id dolor .</p>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-5" class="d-inline-block mt-30">
            <a href="#" class="button -md -orange-1 text-white">Start Learning For Free </a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="section-bg pt-90 pb-90 lg:pt-50 lg:pb-50">
    <div class="section-bg__item -full">
      <div class="bg-image js-lazy" data-bg="assets/img/home-8/grow/bg.png"></div>
    </div>

    <div class="container">
      <div data-anim-wrap class="row y-gap-30 justify-between items-center">
        <div data-anim-child="slide-up delay-3" class="col-xl-4 col-lg-5 col-md-8">
          <h2 class="text-30 lh-15 text-white">Grow your career today with the Education courses</h2>
          <p class="text-white mt-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
          <div class="d-inline-block mt-25">
            <a href="#" class="button -md -green-1 text-dark-1">Explore Courses</a>
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto">
          <div class="composition -type-6">
            <div class="-el-1">
              <div class="bg-white rounded-16 px-60 py-50 sm:px-30 sm:py-40 text-center">
                <div class="text-55 fw-700 text-dark-1">9/10</div>
                <div class="mt-10">Overall courses satisfaction score</div>
              </div>
            </div>

            <div class="-el-2">
              <div class="bg-white rounded-16 px-60 py-50 sm:px-30 sm:py-40 text-center">
                <div class="text-55 fw-700 text-dark-1">10K+</div>
                <div class="mt-10">Happy Students Worldwide</div>
              </div>
            </div>

            <div class="-el-3">
              <div class="bg-white rounded-16 px-60 py-50 sm:px-30 sm:py-40 text-center">
                <div class="text-55 fw-700 text-dark-1">96%</div>
                <div class="mt-10">Completition Rate On All Courses</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row y-gap-50">
        <div class="col-xl-3 col-lg-4 col-md-8">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Learn from the best instructors</h2>

            <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliquam id dolor.</p>

          </div>


          <div class="d-inline-block">

            <a href="instructors-list-1.html" class="button -icon -red-2 text-orange-1 mt-30">
              View All Instructors
              <i class="icon-arrow-top-right text-13 ml-10"></i>
            </a>

          </div>
        </div>

        <div class="offset-xl-1 col-lg-8">
          <div class="overflow-hidden js-section-slider" data-loop data-pagination data-slider-cols="xl-3 lg-3 md-2 sm-2">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="d-flex flex-column items-center">
                  <div>
                    <img src="assets/img/speakers/1.png" alt="image">
                  </div>
                  <div class="d-flex items-center mt-20">
                    <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                    <div class="text-yellow-1">4.5</div>
                  </div>
                  <h5 class="text-17 fw-500 mt-10">Jerome Bell</h5>
                  <p class="mt-5">Marketing Coordinator</p>

                  <div class="d-flex x-gap-15 items-center pt-5">

                    <div class="d-flex items-center">
                      <div class="mr-10">
                        <img src="assets/img/team/icons/1.svg" alt="icon">
                      </div>
                      <div class="text-13 lh-1">692 Students</div>
                    </div>

                    <div class="d-flex items-center">
                      <div class="mr-10">
                        <img src="assets/img/team/icons/2.svg" alt="icon">
                      </div>
                      <div class="text-13 lh-1">15 Course</div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="d-flex flex-column items-center">
                  <div>
                    <img src="assets/img/speakers/2.png" alt="image">
                  </div>
                  <div class="d-flex items-center mt-20">
                    <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                    <div class="text-yellow-1">4.5</div>
                  </div>
                  <h5 class="text-17 fw-500 mt-10">Bessie Cooper</h5>
                  <p class="mt-5">President of Sales</p>

                  <div class="d-flex x-gap-15 items-center pt-5">

                    <div class="d-flex items-center">
                      <div class="mr-10">
                        <img src="assets/img/team/icons/1.svg" alt="icon">
                      </div>
                      <div class="text-13 lh-1">692 Students</div>
                    </div>

                    <div class="d-flex items-center">
                      <div class="mr-10">
                        <img src="assets/img/team/icons/2.svg" alt="icon">
                      </div>
                      <div class="text-13 lh-1">15 Course</div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="d-flex flex-column items-center">
                  <div>
                    <img src="assets/img/speakers/3.png" alt="image">
                  </div>
                  <div class="d-flex items-center mt-20">
                    <div class="icon-star text-9 text-yellow-1 mr-5"></div>
                    <div class="text-yellow-1">4.5</div>
                  </div>
                  <h5 class="text-17 fw-500 mt-10">Kristin Watson</h5>
                  <p class="mt-5">Nursing Assistant</p>

                  <div class="d-flex x-gap-15 items-center pt-5">

                    <div class="d-flex items-center">
                      <div class="mr-10">
                        <img src="assets/img/team/icons/1.svg" alt="icon">
                      </div>
                      <div class="text-13 lh-1">692 Students</div>
                    </div>

                    <div class="d-flex items-center">
                      <div class="mr-10">
                        <img src="assets/img/team/icons/2.svg" alt="icon">
                      </div>
                      <div class="text-13 lh-1">15 Course</div>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="d-flex justify-center x-gap-15 items-center pt-60 lg:pt-40">
              <div class="col-auto">
                <div class="pagination -arrows js-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
      <div class="row justify-center text-center">
        <div data-anim-child="slide-up delay-1" class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Upcoming Events</h2>

            <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.</p>

          </div>

        </div>
      </div>

      <div class="row y-gap-30 pt-60 lg:pt-40">

        <div data-anim-child="slide-up delay-2" class="col-lg-6">
          <div class="py-10 pl-10 pr-20 border-light bg-white rounded-8 shadow-1 -button-hover-1">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="size-120">
                  <img class="img-full rounded-8" src="assets/img/courses-list/1.png" alt="icon">
                </div>
              </div>

              <div class="col">
                <div class="row y-gap-20 items-center">
                  <div class="col">
                    <h4 class="text-17 lh-15 fw-500">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="d-flex x-gap-15 items-center pt-10">
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-calendar-2 text-16"></div>
                        <div class="text-14 lh-1 ml-8">6 April, 2022</div>
                      </div>
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-location text-16"></div>
                        <div class="text-14 lh-1 ml-8">London, UK</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="-button-hover-1__button">

                      <a href="#" class="button -icon -orange-1 text-white">
                        Buy
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-3" class="col-lg-6">
          <div class="py-10 pl-10 pr-20 border-light bg-white rounded-8 shadow-1 -button-hover-1">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="size-120">
                  <img class="img-full rounded-8" src="assets/img/courses-list/2.png" alt="icon">
                </div>
              </div>

              <div class="col">
                <div class="row y-gap-20 items-center">
                  <div class="col">
                    <h4 class="text-17 lh-15 fw-500">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="d-flex x-gap-15 items-center pt-10">
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-calendar-2 text-16"></div>
                        <div class="text-14 lh-1 ml-8">6 April, 2022</div>
                      </div>
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-location text-16"></div>
                        <div class="text-14 lh-1 ml-8">London, UK</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="-button-hover-1__button">

                      <a href="#" class="button -icon -orange-1 text-white">
                        Buy
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-4" class="col-lg-6">
          <div class="py-10 pl-10 pr-20 border-light bg-white rounded-8 shadow-1 -button-hover-1">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="size-120">
                  <img class="img-full rounded-8" src="assets/img/courses-list/3.png" alt="icon">
                </div>
              </div>

              <div class="col">
                <div class="row y-gap-20 items-center">
                  <div class="col">
                    <h4 class="text-17 lh-15 fw-500">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="d-flex x-gap-15 items-center pt-10">
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-calendar-2 text-16"></div>
                        <div class="text-14 lh-1 ml-8">6 April, 2022</div>
                      </div>
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-location text-16"></div>
                        <div class="text-14 lh-1 ml-8">London, UK</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="-button-hover-1__button">

                      <a href="#" class="button -icon -orange-1 text-white">
                        Buy
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-5" class="col-lg-6">
          <div class="py-10 pl-10 pr-20 border-light bg-white rounded-8 shadow-1 -button-hover-1">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="size-120">
                  <img class="img-full rounded-8" src="assets/img/courses-list/4.png" alt="icon">
                </div>
              </div>

              <div class="col">
                <div class="row y-gap-20 items-center">
                  <div class="col">
                    <h4 class="text-17 lh-15 fw-500">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="d-flex x-gap-15 items-center pt-10">
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-calendar-2 text-16"></div>
                        <div class="text-14 lh-1 ml-8">6 April, 2022</div>
                      </div>
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-location text-16"></div>
                        <div class="text-14 lh-1 ml-8">London, UK</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="-button-hover-1__button">

                      <a href="#" class="button -icon -orange-1 text-white">
                        Buy
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-6" class="col-lg-6">
          <div class="py-10 pl-10 pr-20 border-light bg-white rounded-8 shadow-1 -button-hover-1">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="size-120">
                  <img class="img-full rounded-8" src="assets/img/courses-list/5.png" alt="icon">
                </div>
              </div>

              <div class="col">
                <div class="row y-gap-20 items-center">
                  <div class="col">
                    <h4 class="text-17 lh-15 fw-500">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="d-flex x-gap-15 items-center pt-10">
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-calendar-2 text-16"></div>
                        <div class="text-14 lh-1 ml-8">6 April, 2022</div>
                      </div>
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-location text-16"></div>
                        <div class="text-14 lh-1 ml-8">London, UK</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="-button-hover-1__button">

                      <a href="#" class="button -icon -orange-1 text-white">
                        Buy
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-7" class="col-lg-6">
          <div class="py-10 pl-10 pr-20 border-light bg-white rounded-8 shadow-1 -button-hover-1">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="size-120">
                  <img class="img-full rounded-8" src="assets/img/courses-list/6.png" alt="icon">
                </div>
              </div>

              <div class="col">
                <div class="row y-gap-20 items-center">
                  <div class="col">
                    <h4 class="text-17 lh-15 fw-500">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="d-flex x-gap-15 items-center pt-10">
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-calendar-2 text-16"></div>
                        <div class="text-14 lh-1 ml-8">6 April, 2022</div>
                      </div>
                      <div class="d-flex items-center text-light-1">
                        <div class="icon-location text-16"></div>
                        <div class="text-14 lh-1 ml-8">London, UK</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="-button-hover-1__button">

                      <a href="#" class="button -icon -orange-1 text-white">
                        Buy
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                      </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row y-gap-30 justify-between items-center">
        <div class="col-xl-4 col-lg-5 col-md-9">
          <h2 class="text-30 lh-13">What Our Students<br>Have To <span class="text-orange-1">Say</span></h2>
          <p class="mt-15">Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliquam id dolor.</p>

          <div class="pt-60 lg:pt-50 pr-5 overflow-hidden js-section-slider" data-gap="30" data-pagination data-slider-cols="xl-1" data-anim-wrap>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div data-anim="slide-left" class="pt-40 pb-30 px-40 border-light rounded-8">
                  <div class="testimonials__content">
                    <h4 class="text-18 fw-500 text-orange-1">Great Work</h4>
                    <p class="lh-2 fw-500 mt-15 mb-30"> “I think Educrat is the best theme I ever seen this year. Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance”</p>

                    <div class="row x-gap-20 y-gap-20 items-center border-top-light pt-15">
                      <div class="col-auto">
                        <img src="assets/img/testimonials/1.png" alt="image">
                      </div>

                      <div class="col-auto">
                        <div class="lh-12 fw-500 text-dark-1">Courtney Henry</div>
                        <div class="text-13 lh-1 mt-5">Web Designer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div data-anim="slide-left" class="pt-40 pb-30 px-40 border-light rounded-8">
                  <div class="testimonials__content">
                    <h4 class="text-18 fw-500 text-orange-1">Great Work</h4>
                    <p class="lh-2 fw-500 mt-15 mb-30"> “I think Educrat is the best theme I ever seen this year. Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance”</p>

                    <div class="row x-gap-20 y-gap-20 items-center border-top-light pt-15">
                      <div class="col-auto">
                        <img src="assets/img/testimonials/2.png" alt="image">
                      </div>

                      <div class="col-auto">
                        <div class="lh-12 fw-500 text-dark-1">Ronald Richards</div>
                        <div class="text-13 lh-1 mt-5">President of Sales</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div data-anim="slide-left" class="pt-40 pb-30 px-40 border-light rounded-8">
                  <div class="testimonials__content">
                    <h4 class="text-18 fw-500 text-orange-1">Great Work</h4>
                    <p class="lh-2 fw-500 mt-15 mb-30"> “I think Educrat is the best theme I ever seen this year. Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance”</p>

                    <div class="row x-gap-20 y-gap-20 items-center border-top-light pt-15">
                      <div class="col-auto">
                        <img src="assets/img/testimonials/3.png" alt="image">
                      </div>

                      <div class="col-auto">
                        <div class="lh-12 fw-500 text-dark-1">Annette Black</div>
                        <div class="text-13 lh-1 mt-5">Nursing Assistant</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="d-flex x-gap-15 items-center pt-30">
              <div class="col-auto">
                <button class="d-flex items-center text-24 arrow-left-hover js-prev">
                  <i class="icon icon-arrow-left"></i>
                </button>
              </div>
              <div class="col-auto">
                <div class="pagination -arrows js-pagination"></div>
              </div>
              <div class="col-auto">
                <button class="d-flex items-center text-24 arrow-right-hover js-next">
                  <i class="icon icon-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="composition -type-7">
            <div class="-el-1">
              <img class="w-1/1" src="assets/img/home-8/testimonials/1.png" alt="image">
            </div>

            <div class="-el-2">
              <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY" class="d-flex items-center justify-center bg-white size-90 rounded-full js-gallery" data-gallery="gallery1">
                <div class="icon-play text-30"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-md layout-pb-md bg-light-6">
    <div data-anim-wrap class="container">
      <div class="row justify-center">
        <div class="col text-center">
          <p class="text-lg text-dark-1">Trusted by the world’s best</p>
        </div>
      </div>

      <div class="row y-gap-30 justify-between sm:justify-start items-center pt-60 md:pt-50">

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-6">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="assets/img/clients/1.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-6">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="assets/img/clients/2.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-6">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="assets/img/clients/3.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-6">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="assets/img/clients/4.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-6">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="assets/img/clients/5.svg" alt="clients image">
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-lg-auto col-md-2 col-sm-3 col-6">
          <div class="d-flex justify-center items-center px-4">
            <img class="w-1/1" src="assets/img/clients/6.svg" alt="clients image">
          </div>
        </div>

      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-lg layout-pb-md">
    <div class="container">
      <div class="row y-gap-30 items-center">
        <div class="col-xl-5 offset-xl-1 col-lg-6">
          <img class="w-1/1" src="assets/img/home-8/features/1.png" alt="image">
        </div>

        <div class="col-xl-4 offset-xl-1 col-lg-6">
          <h3 class="text-24 lh-1">Become an Instructor</h3>
          <p class="mt-20">Join millions of people from around the world learning together. Online learning is as easy and natural as chatting.</p>
          <div class="d-inline-block mt-20">
            <a href="instructors-become.html" class="button -md -outline-purple-1 text-purple-1">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="layout-pt-md layout-pb-lg">
    <div class="container">
      <div class="row y-gap-30 items-center">
        <div class="col-xl-4 offset-xl-1 order-lg-1 col-lg-6 order-2">
          <h3 class="text-24 lh-1">Become a Student</h3>
          <p class="mt-20">Join millions of people from around the world learning together. Online learning is as easy and natural as chatting..</p>
          <div class="d-inline-block mt-20">
            <a href="#" class="button -md -outline-dark-2 text-dark-2">Apply Now</a>
          </div>
        </div>

        <div class="col-xl-5 offset-xl-1 col-lg-6 order-lg-2 order-1">
          <img class="w-1/1" src="assets/img/home-8/features/2.png" alt="image">
        </div>
      </div>
    </div>
  </section> --}}
  
@endsection
