@extends("frontend.layout.app")

@section("content")
    <section class="my-bg-gray pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 text-center justify-content-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item font-weight-bold"><a class="text-dark" href="{{route("review")}}">{{__("admin.review")}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ LaravelLocalization::getCurrentLocale() == "ru" ? $review->course->title_ru : $review->course->title_kz}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 px-2 py-2">
                    <img src=" {{$review->img}}" width="100%">
                    <div class="mt-2 bg-white py-4 px-4">
                        <h3 class="course-subtitle text-dark">
                            {{$review->author}}
                        </h3>
                        <small class="fs-14">
                            {{ LaravelLocalization::getCurrentLocale() == "ru" ? $review->course->title_ru : $review->course->title_kz}}
                        </small>
                    </div>
                </div>
                <div class="col-md-8 py-2 px-4 bg-white">
                    <small class="fs-14 mb-2">
                        {{\Carbon\Carbon::parse($review->created_at)->format("H:s:i d/m/Y")}}
                    </small>

                    <h3 class="course-subtitle text-dark">
                        {{$review->title}}
                    </h3>
                    <br>
                    <p>
                        {{$review->description}}
                    </p>

                </div>


            </div>


        </div>

    </section>







@endsection


