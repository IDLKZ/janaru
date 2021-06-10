@extends("frontend.layout.app")

@section("content")
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="text-center text-sm-left">
                        <h1 class="text-uppercase headline-title font-weight-bold">
                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $course->title_ru : $course->title_kz }}

                        </h1>
                        <p class="headline-subtitle text-uppercase font-weight-bold">JasCongess University</p>
                        <p class="text-dark">
                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $course->subtitle_ru : $course->subtitle_kz }}

                        </p>
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <img src="{{$course->img}}" width="100%">

                </div>
            </div>
        </div>
    </section>

    <section class="my-bg-gray pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 text-center justify-content-center">
                    <h2 class="course-title">
                        {{__("frontend.video_title")}}
                    </h2>
                    <p class="course-subtitle">
                        {{__("frontend.video_subtitle")}}
                    </p>
                </div>
            </div>
            <div class="row py-4">
               <div class="col-md-4">
                   @if($courses->isNotEmpty())
                       @foreach($courses as $course)
                           <div class="mt-2">
                               <a href="{{route("video",["alias"=>$course->alias])}}" class="btn-lg profession-button btn-link">
                                   {{LaravelLocalization::getCurrentLocale() == "ru" ? $course->title_ru : $course->title_kz}}
                               </a>
                           </div>
                       @endforeach
                   @else
                   <div class="mt-2">
                       <a href="" class="btn-lg profession-button btn-link">
                           Копирайтер
                       </a>
                   </div>
                   <div class="mt-2"><a href="" class="btn-lg profession-button btn-link">
                       Таргетолог
                       </a></div>
                   <div class="mt-2"><a href="" class="btn-lg profession-button btn-link">
                       контекстолог
                       </a></div>
                   <div class="mt-2"><a href="" class="btn-lg profession-button btn-link">
                       тренд-вотчер
                       </a></div>
                   <div class="mt-2"><a href="" class="btn-lg profession-button btn-link">
                       SEO оптимизатор
                       </a></div>
                   <div class="mt-2"><a href="" class="btn-lg profession-button btn-link">
                       мобилограф
                       </a></div>
                   <div class="mt-2"><a href="" class="btn-lg profession-button btn-link">
                       пикчер
                       </a></div>
                       @endif
               </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-8 mt-4">
                            <p class="fs-24 font-weight-bold text-dark">
                                Видео уроки
                            </p>
                        </div>
                        <div class="col-md-4 mt-2">
                            <p class="fs-24 text-dark">
                               <span class="font-weight-bold">
                                   {{$videos->count()}}
                               </span>
                                видео
                            </p>
                        </div>
                        @if($videos->isNotEmpty())
                         @foreach($videos as $video)
                        <div class="col-md-4 mt-4 text-center">
                            <a href="{{route("videoSingle",["alias"=>$video->alias])}}" class="btn-lg videocourse-button btn-link">
                                ВИДЕОУРОК {{$loop->iteration}}
                            </a>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>


            </div>

        </div>






    </section>







@endsection

