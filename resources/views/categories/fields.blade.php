<!-- Title Ru Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_ru', __("admin.title_ru")) !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Kz Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_kz', __("admin.title_kz")) !!}
    {!! Form::text('title_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitle Ru Field -->
<div class="form-group col-sm-12">
    {!! Form::label('subtitle_ru', __("admin.subtitle_ru")) !!}
    {!! Form::text('subtitle_ru', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitle Kz Field -->
<div class="form-group col-sm-12">
    {!! Form::label('subtitle_kz', __("admin.subtitle_kz")) !!}
    {!! Form::text('subtitle_kz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Desc Ru Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desc_ru', __("admin.desc_ru")) !!}
    {!! Form::textarea('desc_ru', null, ['class' => 'form-control editor','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Desc Kz Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desc_kz', __("admin.desc_kz")) !!}
    {!! Form::textarea('desc_kz', null, ['class' => 'form-control editor','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Img Field -->
<div class="form-group col-sm-12">
    {!! Form::label('img', __("admin.img")) !!}
    {!! Form::file('img',null, ['class' => 'form-control']) !!}
</div>

