@extends('web.v2.layouts.app')

@section('content')
    <section class="site-top-banner search-top-banner opacity-04 position-relative">
        <img src="{{ getPageBackgroundSettings('products_lists') }}" class="img-cover" alt=""/>

        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center position-relative">
                <div class="col-12 col-md-9 col-lg-7">
                    <h1 class="text-white font-30 mb-15">{{ trans('home.subscribe_now') }}</h1>
                    <p class="text-white">{{trans('home.subscribe_now_hint')}}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-5 mb-5 our-team">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center mb-4">
                <h2 class="text-center mb-4">{{ trans('home.subscribe_now') }}</h2>
                <p>{{trans('home.subscribe_now_hint')}}</p>
            </div>

            <div class="row justify-content-center align-items-center">
                @foreach($subscribes as $subscribe)
                    @include('web.v2.partials.plan-card', compact('subscribe'))
                @endforeach
            </div>
        </div>
    </section>
@endsection
