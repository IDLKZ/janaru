<!-- Img Field -->
<div class="form-group col-sm-12">
    {!! Form::label('img', __("admin.img")) !!}
    {!! Form::file('img', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('course_id', __("admin.course_id")) !!}
    {!! Form::select('course_id',
         LaravelLocalization::getCurrentLocale() == "ru" ?\App\Models\Course::pluck("title_ru","id")->toArray() :  \App\Models\Course::pluck("title_kz","id")->toArray()
    ,null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author', __("admin.author")) !!}
    {!! Form::text('author', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title',  __("admin.title")) !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description',  __("admin.description")) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
