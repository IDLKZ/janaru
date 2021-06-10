<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', __("admin.img")) !!}
    <p><img src="{{ $review->img }}" width="100px"></p>
</div>

<!-- Course Id Field -->
<div class="col-sm-12">
    {!! Form::label('course_id', __("admin.course_id")) !!}
    <p>{{ $review->course->title_ru }}</p>
</div>

<!-- Author Field -->
<div class="col-sm-12">
    {!! Form::label('author', __("admin.author")) !!}
    <p>{{ $review->author }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __("admin.title")) !!}
    <p>{{ $review->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __("admin.description")) !!}
    <p>{!! $review->description !!}</p>
</div>

