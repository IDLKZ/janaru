@extends("frontend.layout.app")

@section("content")
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="text-center text-sm-left">
                        <h1 class="text-uppercase headline-title font-weight-bold">
                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $category->title_ru :$category->title_kz }}
                        </h1>
                        <p class="headline-subtitle text-uppercase font-weight-bold">JasCongess University</p>
                        <p class="text-dark">
                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $category->subtitle_ru :$category->subtitle_kz }}
                        </p>
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <img src="{{$category->img}}" width="100%">

                </div>
            </div>
        </div>
    </section>

    <section class="my-bg-gray pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 text-center justify-content-center">
                    <h2 class="course-title">
                        {{__("frontend.course_title")}}
                    </h2>
                    <p class="course-subtitle">
                        {{__("frontend.course_subtitle")}}
                    </p>
                </div>
            </div>
            <div class="row d-inline-flex justify-content-center w-100">
                @if($courses->isNotEmpty())
                    @foreach($courses as $course)
                    <a href="{{route("video",["alias"=>$course->alias])}}" class="btn-lg profession-button btn-link mt-2">
                        {{  LaravelLocalization::getCurrentLocale() == "ru" ? $course->title_ru : $course->title_kz }}
                    </a>
                    @endforeach
                @else
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    Копирайтер
                </a>
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    Таргетолог
                </a>
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    контекстолог
                </a>
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    тренд-вотчер
                </a>
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    SEO оптимизатор
                </a>
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    мобилограф
                </a>
                <a href="" class="btn-lg profession-button btn-link mt-2">
                    пикчер
                </a>
                @endif



            </div>

        </div>






    </section>







@endsection

