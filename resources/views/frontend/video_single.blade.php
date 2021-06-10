@extends("frontend.layout.app")

@section("content")
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="text-center text-sm-left">
                        <h1 class="text-uppercase headline-title font-weight-bold">
                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $video->title_ru : $video->title_kz }}

                        </h1>
                        <p class="headline-subtitle text-uppercase font-weight-bold">JasCongess University</p>
                        <p class="text-dark">
                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $video->subtitle_ru : $video->subtitle_kz }}

                        </p>
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <img src="{{$video->img}}" width="100%">

                </div>
            </div>
        </div>
    </section>

    <section class="my-bg-gray pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 text-center justify-content-center">
                    {!! Youtube::iFrame($video->link, ['rel'=> 0, 'autoplay'=>1, 'controls'=>1, 'showinfo'=>1, 'width'=>"100%", 'height'=>550 ,'frameborder'=>0])!!}
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-12">
                    {!! LaravelLocalization::getCurrentLocale() == "ru" ? $video->desc_ru : $video->desc_kz  !!}

                </div>


            </div>

        </div>






    </section>







@endsection


