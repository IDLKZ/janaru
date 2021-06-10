@extends("frontend.layout.app")

@section("content")
    <section class="my-bg-gray pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 text-center justify-content-center">
                    <h2 class="course-title">
                        {{__("frontend.review_title")}}
                    </h2>
                    <p class="course-subtitle">
                        {{__("frontend.review_subtitle")}}
                    </p>
                </div>
            </div>
            <div class="row">
                @if($reviews->isNotEmpty())
                    @foreach($reviews as $review)
                        <div class="col-md-4  pt-4 mt-2">
                            <div class="review-card  bg-white py-4 px-4">
                                <div class="justify-content-center">
                                    <img src="{{$review->img}}" width="100%">
                                </div>
                                <div class="pt-2 px-2">
                                    <small class="fs-14">{{ LaravelLocalization::getCurrentLocale() == "ru" ? $review->course->title_ru : $review->course->title_kz}}</small>
                                    <h3 class="course-subtitle">
                                        {{$review->author}}
                                    </h3>
                                    <p>
                                        {{$review->description}}
                                    </p>
                                    <a href="{{route("reviewSingle",["alias"=>$review->id])}}">
                                        {{__("frontend.read_more")}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                @for($i = 0; $i<3;$i++)
                <div class="col-md-4  pt-4 mt-2">
                    <div class="review-card  bg-white py-4 px-4">
                    <div class="justify-content-center">
                        <img src="/img/review.png" width="100%">
                    </div>
                    <div class="pt-2 px-2">
                    <small class="fs-14">Курсы Маркетинга</small>
                        <h3 class="course-subtitle">
                            Азаматов Алим
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,nas...
                        </p>
                        <a href="">
                            Подробнее
                        </a>
                    </div>
                    </div>
                </div>
                @endfor
                @endif
            </div>

        </div>






    </section>







@endsection

