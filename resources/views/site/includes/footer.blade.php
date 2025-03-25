<footer class="footer -type-4 bg-dark-2">
<div class="container">
    <div class="row y-gap-30 justify-between pt-60">
    <div class="col-lg-7 col-md-6">
        <div class="text-17 fw-500 text-white uppercase mb-25">
        GET IN TOUCH
        </div>
        <form action="" class="form-single-field -base mt-15">
        <input class="py-20 px-30 bg-dark-6 rounded-200 text-white" type="text" placeholder="Your Email">
        <button class="button -white rounded-full" type="submit">
            <i class="icon-arrow-right text-24 text-dark-1"></i>
        </button>
        </form>
    </div>

    <div class="col-xl-4 col-lg-5 col-md-6">
        <div class="footer-header__logo">
        <img src="{{ asset('assets/img/footer/footer-logo.svg') }}" alt="logo">
        </div>

        <div class="d-flex justify-between mt-30">
        <div class="">
            <div class="text-white opac-70">Toll Free Customer Care</div>
            <div class="text-18 lh-1 fw-500 text-white mt-5">+(1) 123 456 7890</div>
        </div>
        <div class="">
            <div class="text-white opac-70">Need live support?</div>
            <div class="text-18 lh-1 fw-500 text-white mt-5">hi@educrat.comv</div>
        </div>
        </div>
    </div>
    </div>

    <div class="row y-gap-30 justify-between pt-60 pb-60">
    <div class="col-lg-7 col-md-6">
        <div class="row y-gap-30">
        <div class="col-lg-4 col-md-4">
            <div class="text-17 fw-500 text-white uppercase mb-25">ABOUT</div>
            <div class="d-flex y-gap-10 flex-column text-white">
            <a href="about-1.html">About Us</a>
            <a href="blog-list-1.html">Learner Stories</a>
            <a href="instructor-become.html">Careers</a>
            <a href="blog-list-1.html">Press</a>
            <a href="#">Leadership</a>
            <a href="contact-1.html">Contact Us</a>
            </div>
        </div>

        <div class="col-lg-8 col-md-8">
            <div class="text-17 fw-500 text-white uppercase mb-25">CATEGORIES</div>
            <div class="row justify-between y-gap-20">
            <div class="col-md-6">
                <div class="d-flex y-gap-10 flex-column text-white">
                <a href="courses-single-1.html">Development</a>
                <a href="courses-single-2.html">Business</a>
                <a href="courses-single-3.html">Finance & Accounting</a>
                <a href="courses-single-4.html">IT & Software</a>
                <a href="courses-single-5.html">Office Productivity</a>
                <a href="courses-single-6.html">Design</a>
                <a href="courses-single-1.html">Marketing</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex y-gap-10 flex-column text-white">
                <a href="courses-single-1.html">Lifiestyle</a>
                <a href="courses-single-2.html">Photography & Video</a>
                <a href="courses-single-3.html">Health & Fitness</a>
                <a href="courses-single-4.html">Music</a>
                <a href="courses-single-5.html">UX Design</a>
                <a href="courses-single-6.html">Seo</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-5 col-md-6">
        {{-- <div class="">
        <div class="text-17 uppercase text-white fw-500">Take your learning with you</div>

        <div class="d-flex mt-15">
            <div class="d-flex items-center rounded-8 px-25 py-10 footer-bg-color">
            <div class="icon-apple text-white text-24"></div>
            <div class="text-white ml-20">
                <div class="text-13 lh-12">Download on the</div>
                <div class="text-15 fw-500 lh-12 mt-3">Apple Store</div>
            </div>
            </div>

            <div class="d-flex items-center rounded-8 px-25 py-10 footer-bg-color ml-10">
            <div class="icon-play-market text-white text-24"></div>
            <div class="text-white ml-20">
                <div class="text-13 lh-12">Get in on</div>
                <div class="text-15 fw-500 lh-12 mt-3">Google Play</div>
            </div>
            </div>
        </div>
        </div> --}}

        <div class="footer-header-socials mt-60">
        <div class="text-17 uppercase text-white fw-500">Follow us on social media</div>
        <div class="footer-header-socials__list d-flex items-center mt-15">
            <a href="#" class="size-40 d-flex justify-center items-center text-white"><i class="icon-facebook"></i></a>
            <a href="#" class="size-40 d-flex justify-center items-center text-white"><i class="icon-twitter"></i></a>
            <a href="#" class="size-40 d-flex justify-center items-center text-white"><i class="icon-instagram"></i></a>
            <a href="#" class="size-40 d-flex justify-center items-center text-white"><i class="icon-linkedin"></i></a>
        </div>
        </div>
    </div>
    </div>

    <div class="py-30 border-top-light-15">
    <div class="row justify-between items-center y-gap-20">
        <div class="col-auto">
        <div class="d-flex items-center h-100 text-white">
            © 2022 Educrat. All Right Reserved.
        </div>
        </div>

        <div class="col-auto">
        <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
            <div>
            <div class="d-flex x-gap-15 text-white">
                <a href="help-center.html">Help</a>
                <a href="terms.html">Privacy Policy</a>
                <a href="terms.html">Cookie Notice</a>
                <a href="terms.html">Security</a>
                <a href="terms.html">Terms of Use</a>
            </div>
            </div>

            <div>
            <a href="#" class="button px-30 h-50 -dark-6 rounded-200 text-white">
                <i class="icon-worldwide text-20 mr-15"></i><span class="text-15">English | Français</span>
            </a>

            {{-- <a href="{{ url('lang/en') }}" class="button px-30 h-50 -dark-6 rounded-200 text-white {{ app()->getLocale() == 'en' ? 'font-weight-bold' : '' }}">
                English
            </a> | 
            <a href="{{ url('lang/fr') }}" class="button px-30 h-50 -dark-6 rounded-200 text-white {{ app()->getLocale() == 'fr' ? 'font-weight-bold' : '' }}">
                Français
            </a> --}}
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</footer>