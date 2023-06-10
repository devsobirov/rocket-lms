@extends('web.v2.layouts.app')
@php
    $navbarButton = null;
    if (empty($authUser) and auth()->check()) {
        $authUser = auth()->user();
    }

    if (!empty($authUser)) {
        $navbarButton = getNavbarButton($authUser->role_id);
    }

@endphp

@section('content')
    <section class="home-banner bg-light mb-5">
        <div class="d-flex banner-inner">
            <div class="banner-block col-md-7 d-md-flex d-sm-none" style="background-image: url('/store/1/slide.jpg')"></div>
            <div class="banner-block col-md-5 col-sm-12">
                <h3 class="mb-2">ПОДГОТОВКА и ОБУЧЕНИЕ</h3>
                <h3 class="mb-3">В СФЕРЕ ПОД/ФТ</h3>
                <p>Обучайтесь у лучших специалистов по доступной цене!</p>
                <p>Мы предлагаем удобный сервис для подготовки и обучения. Вам понравится.</p>

                @if(!empty($navbarButton))
                    <a href="{{$navbarButton->url}}" class="btn btn-dark-blue">{{$navbarButton->title}}</a>
                @else
                    <div>
                        <a href="{{route('login')}}" class="btn btn-outline-dark-blue mx-2">{{trans('auth.login')}}</a>
                        <a href="{{route('register')}}" class="btn btn-dark-blue">{{trans('auth.register')}}</a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="why-us py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-4">Why us?</h2>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="line-header">
                        <h2>01</h2>
                    </div>
                    <div class="feature-box">
                        <h4 class="feature-title">Feature title</h4>
                        <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias amet ducimus enim eveniet hic nihil nulla suscipit tempore ut!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="line-header">
                        <h2>02</h2>
                    </div>
                    <div class="feature-box">
                        <h4 class="feature-title">Feature title</h4>
                        <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam consectetur cupiditate dolorum, in iure nisi quas ratione ullam vitae.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="line-header">
                        <h2>03</h2>
                    </div>
                    <div class="feature-box">
                        <h4 class="feature-title">Feature title</h4>
                        <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eaque error iure necessitatibus neque nihil nisi odit veniam vitae voluptates!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="line-header">
                        <h2>04</h2>
                    </div>
                    <div class="feature-box">
                        <h4 class="feature-title">Feature title</h4>
                        <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda consequuntur cumque cupiditate earum hic ipsum quibusdam quo soluta temporibus!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 mb-5 popular-courses">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center mb-4">Popular courses</h2>

                <div class="flick-nav courses-nav d-flex gap-2">
                    <div class="left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="courses-carousel py-3" data-controls-id="courses-nav">
                @foreach($latestWebinars as $webinar)
                    @include('web.v2.partials.course-card', ['course' => $webinar])
                @endforeach
            </div>

            <div class="d-flex align-items-center justify-content-center">
                <a href="/classes?sort=newest" class="btn btn-dark-blue">{{ trans('home.view_all') }}</a>
            </div>
        </div>
    </section>

    <section class="bg-white py-4 mb-5 our-team">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-center mb-4">{{ trans('home.instructors') }}</h2>

                <div class="flick-nav team-nav d-flex gap-2">
                    <div class="left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="team-carousel py-3" data-controls-id="team-nav">
                @foreach($instructors as $instructor)
                    @include('web.v2.partials.instructor-card', ['instructor' => $instructor])
                @endforeach
            </div>

            <div class="text-center">
                <a href="/instructors" class="btn btn-dark-blue">{{ trans('home.all_instructors') }}</a>
            </div>
        </div>
    </section>

    <section class="progress-steps bg-light">
        <div class="container">
            <h2 class="text-center mb-4">How do we work</h2>

            <div class="row align-items-stretch justify-content-between">
                <div class="col-md-4 col-sm-12">
                    <div class="card step-card shadow-sm">
                        <h4>1. Step Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, enim facere fugiat inventore ipsum labore laboriosam maiores modi nobis, non nostrum provident quae ratione veniam?</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card step-card shadow-sm">
                        <h4>1. Step Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae consequuntur deserunt dolorem expedita illo laboriosam magnam mollitia nostrum nulla omnis, quis ratione tempora vero.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card step-card shadow-sm">
                        <h4>1. Step Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem earum eos ipsa itaque iure labore maxime necessitatibus nesciunt perferendis possimus, quae quam temporibus ut voluptas?</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                    <h3>Подготовка и обучение в сфере ПОД/ФТ</h3>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                    <a href="#" class="btn btn-dark-blue mx-3">Action name</a>
                    <a href="#" class="btn btn-outline-dark-blue mx-3">Action name</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq bg-light mb-5 py-5">
        <div class="container">
            <h2 class="text-center mb-4">FAQ</h2>

            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white testimonials">
        <div class="container">

            <div class="section-title text-center mb-4">
                <h4>{{ trans('home.testimonials') }}</h4>
                <p>{{ trans('home.testimonials_hint') }}</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <div class="row text-center">
                        @foreach($testimonials as $testimonial)
                            @include('web.v2.partials.testimonial-card')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-sm-12 text-center">
                    <h5>Остались вопросы? Свяжитесь с нами или закажите обратный связь</h5>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <button class="btn btn-dark-blue mx-2">Action</button>
                    <button class="btn btn-dark-blue mx-2">Action</button>
                    <button class="btn btn-dark-blue mx-2">Action</button>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

@section('body')
    <script src="{{asset('assets/v2/js/custom-carousel.js')}}"></script>
@endsection
