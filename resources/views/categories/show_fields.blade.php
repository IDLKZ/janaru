<!-- Title Ru Field -->
<div class="col-sm-12">
    {!! Form::label('title_ru', __("admin.title_ru")) !!}
    <p>{{ $category->title_ru }}</p>
</div>

<!-- Title Kz Field -->
<div class="col-sm-12">
    {!! Form::label('title_kz',  __("admin.title_kz")) !!}
    <p>{{ $category->title_kz }}</p>
</div>

<!-- Subtitle Ru Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_ru', __("admin.subtitle_ru")) !!}
    <p>{{ $category->subtitle_ru }}</p>
</div>

<!-- Subtitle Kz Field -->
<div class="col-sm-12">
    {!! Form::label('subtitle_kz', __("admin.subtitle_kz")) !!}
    <p>{{ $category->subtitle_kz }}</p>
</div>

<!-- Desc Ru Field -->
<div class="col-sm-12">
    {!! Form::label('desc_ru', __("admin.desc_ru")) !!}
    <p>{!! $category->desc_ru !!}</p>
</div>

<!-- Desc Kz Field -->
<div class="col-sm-12">
    {!! Form::label('desc_kz', __("admin.desc_kz")) !!}
    <p>{!! $category->desc_kz !!}</p>
</div>



<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("admin.img")) !!}
    <img src="{{ $category->img }}" width="250px">
</div>

