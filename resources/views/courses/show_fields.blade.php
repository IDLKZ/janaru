<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ LaravelLocalization::getCurrentLocale() == "ru" ? $course->category->title_ru : $course->category->title_kz }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz',  __("admin.title_kz")) !!}
    <p>{{ $course->title_kz }}</p>
</div>

<!-- Subtitle Ru Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_ru', __("admin.subtitle_ru")) !!}
    <p>{{ $course->subtitle_ru }}</p>
</div>

<!-- Subtitle Kz Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_kz', __("admin.subtitle_kz")) !!}
    <p>{{ $course->subtitle_kz }}</p>
</div>

<!-- Desc Ru Field -->
<div class="col-sm-12">
    {!! Form::label('desc_ru', __("admin.desc_ru")) !!}
    <p>{!! $course->desc_ru !!}</p>
</div>

<!-- Desc Kz Field -->
<div class="col-sm-12">
    {!! Form::label('desc_kz', __("admin.desc_kz")) !!}
    <p>{!! $course->desc_kz !!}</p>
</div>



<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("admin.img")) !!}
    <img src="{{ $course->img }}" width="250px">
</div>

