<footer class="footer -type-4 bg-dark-2">
    <div class="container">
        <div class="row y-gap-30 justify-between pt-60">
            <div class="col-lg-7 col-md-6">
                <div class="text-17 fw-500 text-white uppercase mb-25">
                    Follow us on social media
                </div>
                <div class="footer-header-socials__list d-flex items-center mt-15">
                    <a href="{{ $parametre->facebook_link ?? '#' }}"
                        class="size-40 d-flex justify-center items-center text-white" target="_blank">
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="{{ $parametre->twitter_link ?? '#' }}"
                        class="size-40 d-flex justify-center items-center text-white" target="_blank">
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="{{ $parametre->instagram_link ?? '#' }}"
                        class="size-40 d-flex justify-center items-center text-white" target="_blank">
                        <i class="icon-instagram"></i>
                    </a>

                    <a href="{{ $parametre->linkedin_link ?? '#' }}"
                        class="size-40 d-flex justify-center items-center text-white" target="_blank">
                        <i class="icon-linkedin"></i>
                    </a>

                </div>
            </div>

            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="footer-header__logo">
                    <img src="{{ asset($parametre->footer_logo ?? 'assets/img/footer-logo.svg') }}" alt="Footer Logo">
                </div>
                <div class="d-flex justify-between mt-30">
                    <div class="">
                        <div class="text-white opac-70">Appeler nous sur ce numero.</div>
                        <div class="text-18 lh-1 fw-500 text-white mt-5">{{ $parametre->telephone ?? '' }}</div>
                    </div>
                    <div class="">
                        <div class="text-white opac-70">Avez-vous des questions?</div>
                        <div class="text-18 lh-1 fw-500 text-white mt-5"><a href="mailto:{{ $parametre->email ?? '#' }}">{{ $parametre->email ?? '' }}</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 justify-between pt-60 pb-60">
        </div>

        <div class="py-30 border-top-light-15">
            <div class="row justify-between items-center y-gap-20">
                <div class="col-auto">
                    <div class="d-flex items-center h-100 text-white">
                        © {{ $parametre->copyright_year ?? '2025' }} {{ $parametre->company_name ?? 'KCP OURO' }}. All
                        Rights Reserved.
                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                        <div>
                            <div>
                                <a href="#" class="button px-30 h-50 -dark-6 rounded-200 text-white">
                                    <i class="icon-worldwide text-20 mr-15"></i><span class="text-15">English |
                                        Français</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
