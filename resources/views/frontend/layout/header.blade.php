<div class="headbar">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="headbar-block d-flex  align-items-center">
                    <div class="border-right headbar-block d-flex  align-items-center pr-2">
                        Телефон:
                        <a href="tel:+7 (7172) 51 58 10"> +7 (7172) 51 58 10</a>
                    </div>
                    <div class="pl-2">
                        Почта:
                        <a href="mailto:+7 (7172) 51 58 10"> info@jascongress.kz</a>
                    </div>

                </div>

            </div>
            <div class="col-md-6 headbar-block d-flex justify-content-center align-items-center border-right">
                Адрес:
                <a href="https://go.2gis.com/9gsm6v">
                    Республика Казахстана, г. Нур-Султан, пр. Кабанбай батыра 19, блок Е                </a>
            </div>
            <div class="col-md-1 headbar-block d-flex justify-content-center align-items-center">
                <a class="fs-16 text-secondary" href="https://instagram.com/janaru.kz?utm_medium=copy_link" target="_blank">
                <i class="fab fa-instagram"></i>
                </a>
                <a class="fs-16 text-secondary ml-2" href="https://t.me/janaru2021" target="_blank">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img class="my-logo" src="/img/logo1.png">
        </a>
        <a class="navbar-brand" href="/">
            <img class="my-logo" src="/img/logo2.png">
        </a>
        <a class="navbar-brand" href="/">
            <img class="my-logo" src="/img/logo3.png">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item fs-14 text-dark">
                    <a class="nav-link" href="/">{{__("frontend.menu_course")}}</a>
                </li>
                @auth()
                    <li class="nav-item fs-14 text-dark">
                        <a class="nav-link" href="{{route("home")}}">{{__("frontend.menu_cabinet")}}</a>
                    </li>
                @else
                    <li class="nav-item fs-14 text-dark">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">{{__("frontend.menu_login")}}</a>
                    </li>
                    <li class="nav-item fs-14 text-dark">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#gridSystemModal">{{__("frontend.menu_register")}}</a>
                    </li>
                @endauth



                <li class="nav-item fs-14 text-dark">
                    <a class="nav-link" href="#">{{__("frontend.menu_base")}}</a>
                </li>
                <li class="nav-item fs-14 text-dark">
                    <a class="nav-link" href="{{route("review")}}">{{__("frontend.menu_review")}}</a>
                </li>
                <li class="nav-item fs-14 text-dark">
                    <a class="nav-link" data-toggle="modal" data-target="#resumeModal" href="#">{{__("frontend.menu_resume")}}</a>
                </li>

                <li class="nav-item dropdown fs-14 text-dark">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ "/". LaravelLocalization::getCurrentLocale() . ".png" }}" alt="..." class="rounded-circle lang-circle"> {{ LaravelLocalization::getCurrentLocaleNative() }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown text-dark">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a rel="alternate" class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <img src="{{ "/". $localeCode . ".png" }}" alt="..." class="rounded-circle lang-circle">
                            {{ $properties['native'] }}</a>

                        @endforeach
                    </div>
                </li>
                <div class="add_information">
                <li class="nav-item dropdown fs-14 mt-2">
                    <i class="fas fa-phone"></i>
                    <a class="text-dark" href="tel:+7 (7172) 51 58 10"> +7 (7172) 51 58 10</a>
                </li>
                <li class="nav-item dropdown fs-14 mt-2">
                    <i class="fas fa-envelope"></i>
                    <a class="text-dark" href="mailto:+7 (7172) 51 58 10"> info@jascongress.kz</a>
                </li>
                <li class="nav-item dropdown fs-14 mt-2">
                    <i class="fas fa-map"></i>
                    <a class="text-dark" href="https://go.2gis.com/9gsm6v"> Республика Казахстана, г. Нур-Султан, пр. Мангилик ел 55/13, офис 1.12</a>
                </li>
                </div>

            </ul>

        </div>
    </nav>
</div>

