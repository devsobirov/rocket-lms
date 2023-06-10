@php
        $navbarButton = null;
        if (empty($authUser) and auth()->check()) {
            $authUser = auth()->user();
        }

        if (!empty($authUser)) {
            $navbarButton = getNavbarButton($authUser->role_id);
        }

@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 px-4 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            @if(!empty($generalSettings['logo']))
                <img src="{{ $generalSettings['logo'] }}" class="img-cover" alt="site logo">
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 @if(request()->routeIs('homepage')) active @endif" aria-current="page" href="{{route('homepage')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 @if(request()->routeIs('plans')) active @endif" href="{{route('plans')}}">Тарифы</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item mx-2">
                    @if(!empty($navbarButton))
                        <a href="{{$navbarButton->url}}" class="btn btn-primary">{{$navbarButton->title}}</a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-outline-primary">{{trans('auth.login')}}</a>
                        <a href="{{route('register')}}" class="btn btn-primary">{{trans('auth.register')}}</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
