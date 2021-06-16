@extends("frontend.layout.app")

@section("content")
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="text-center text-sm-left">
                        <h1 class="text-uppercase headline-title font-weight-bold">{{__("frontend.main_title")}}</h1>
                        <p class="headline-subtitle text-uppercase font-weight-bold">JasCongess University</p>
                        <p class="text-dark">
                            {{__("frontend.main_subtitle")}}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="/img/bg.png" width="100%">

                </div>
            </div>
        </div>
    </section>

    <section class="my-bg-gray pb-5">
        <div class="container">
            <div class="row">
                @if($categories->isNotEmpty())
                    @foreach($categories as $category)
                        <div class="col-md-3">
                            <div class="my-card">
                        <span class="card-announce">
                            {{ LaravelLocalization::getCurrentLocale() == "ru" ? $category->title_ru : $category->title_kz}}
                        </span>
                                <div class="card-img">
                                    <img src="{{$category->img}}">
                                </div>
                                <div class="card-profession">
                                    @if($category->courses->isNotEmpty())
                                    <ul class="list-unstyled list-group">
                                        @foreach($category->courses as $course)
                                        <li class="list-group-item border-0 font-weight-bold text-blue py-0">
                                            - {{LaravelLocalization::getCurrentLocale() == "ru" ? $course->title_ru : $course->title_kz}}
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <div class="text-center py-2 align-content-end font-weight-normal button-profession">
                                        <a class="btn btn-secondary card-button font-weight-normal" href="{{route("course",["alias"=>$category->alias])}}">{{__("frontend.start")}}</a>
                                    </div>
                                </div>


                            </div>

                        </div>

                    @endforeach
                @else
                @for($i=0;$i<4;$i++)
                <div class="col-md-3">
                    <div class="my-card">
                        <span class="card-announce">
                            SMM
                        </span>
                        <div class="card-img">
                            <img src="/img/course.png">
                        </div>
                        <div class="card-profession">
                        <ul class="list-unstyled list-group">
                            <li class="list-group-item border-0 font-weight-bold text-blue py-0">- Копирайтер</li>
                            <li class="list-group-item border-0 font-weight-bold text-blue py-0">- Таргетолог</li>
                            <li class="list-group-item border-0 font-weight-bold text-blue py-0">- Контекстолог</li>
                            <li class="list-group-item border-0 font-weight-bold text-blue py-0">- Трендвотчер</li>
                            <li class="list-group-item border-0 font-weight-bold text-blue py-0">- SEO-оптимизатор</li>
                         </ul>
                            <div class="text-center py-2">
                                <a class="btn btn-secondary card-button" href="">Начать Курс</a>
                            </div>
                        </div>


                    </div>

                </div>
                @endfor
                    @endif

            </div>
        </div>






    </section>







@endsection
