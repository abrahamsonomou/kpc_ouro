@extends('site.base') <!-- Extend your main site layout here -->
@section('title', 'Contact Success')

@section('content')
<br>
<br>
<div class="contact-success-container mt-30 mb-30">
    <div class="text-center pt-60 lg:pt-40">
        <h1 class="text-32 fw-600 text-dark-1">Thank You for Your Message!</h1>
        <p class="text-16 lh-1 text-dark-2">We have received your message and will get back to you as soon as possible.</p>
        <div class="mt-30">
            <a href="{{ route('home') }}" class="button -md -purple-1 text-white">
                Return to Homepage
            </a>
        </div>
    </div>
</div>
@endsection
