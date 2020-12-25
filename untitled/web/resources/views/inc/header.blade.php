<nav class="site-header sticky-top py-1" style="background-color: #f2f2f2;">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="{{route('home')}}" aria-label="Product">
            <i class="fas fa-mug-hot fa-lg mt-0"></i> Caffe SE
        </a>
        <a class="py-2 d-none d-md-inline-block ml-5 mr-5" href="#"></a>
        <a class="py-2 d-none d-md-inline-block ml-5 mr-5" href="#"></a>
        <a class="py-2 d-none d-md-inline-block ml-5 mr-5" href="#"></a>
        <a class="py-2 d-none d-md-inline-block ml-5 mr-5" href="#"></a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('review')}}">Контакты</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('registration')}}">sing up</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('login')}}">sing in</a>

        <ul class="navbar-nav mt-2">
            <li class="nav-item active">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Язык
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Қазақша</a>
                            <a class="dropdown-item" href="">English</a>
                            <a class="dropdown-item" href="">Русский</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

{{--<nav class="navbar navbar-expand-lg" style="color: #cc6600;">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand nav-link" href="{{route('home')}}"><i class="fas fa-book"></i> ReadOnline.kz</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"--}}
{{--                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">--}}
{{--            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="">Библиотека</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link ml-3" href="">Подписка</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link ml-3" href="">Контакты</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link ml-3" href="{{route('about')}}">О нас</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link ml-3" href="{{route('review')}}">Отзывы</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link ml-3" href="">Войти</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
