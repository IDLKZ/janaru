@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bg-white">
        <div class="col-md-4">
             <img src="{{auth()->user()->img}}" width="100%">
        </div>
        <div class="col-md-8">
        @include('adminlte-templates::common.errors')
            <!-- Is Admin Field -->
            {!! Form::model(auth()->user(), ['route' => ['editUser'], 'method' => 'post', "files"=>true]) !!}

        <!-- Name Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('name', __("admin.name")) !!}
                {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Surname Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('surname', __("admin.surname")) !!}
                {!! Form::text('surname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Middlename Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('middlename', __("admin.middlename") . "*") !!}
                {!! Form::text('middlename', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>


            <!-- Work Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('work', __("admin.work")) !!}
                {!! Form::text('work', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
            </div>

            <!-- Birthday Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('birthday', __("admin.birthday")) !!}
                {!! Form::text('birthday', null, ['class' => 'form-control datepicker','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- City Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('city', __("admin.city")) !!}
                {!! Form::select('city',
                    ["Нур-Султан"=>"Нур-Султан","Алма-Ата"=>"Алма-Ата","Шымкент"=>"Шымкент","Караганда"=>"Караганда","Актобе"=>"Актобе","Тараз"=>"Тараз","Павлодар"=>"Павлодар","Усть-Каменогорск"=>"Усть-Каменогорск","Семей"=>"Семей","Атырау"=>"Атырау","Костанай"=>"Костанай","Рудный"=>"Рудный","Экибастуз"=>"Экибастуз","Талдыкорган"=>"Талдыкорган","Кызылорда"=>"Кызылорда","Уральск"=>"Уральск","Петропавловск"=>"Петропавловск","Темиртау"=>"Темиртау","Кокшетау"=>"Кокшетау","Актау"=>"Актау","Туркестан"=>"Туркестан","Акмолинская область"=>"Акмолинская область","Актюбинская область"=>"Актюбинская область","Алматинская область"=>"Алматинская область","Атырауская область"=>"Атырауская область","Восточно-Казахстанская область"=>"Восточно-Казахстанская область","Жамбылская область"=>"Жамбылская область","Западно-Казахстанская область"=>"Западно-Казахстанская область","Карагандинская область"=>"Карагандинская область","Костанайская область"=>"Костанайская область","Кызылординская область"=>"Кызылординская область","Мангистауская область"=>"Мангистауская область","Павлодарская область"=>"Павлодарская область","Северо-Казахстанская область"=>"Северо-Казахстанская область","Туркестанская область"=>"Туркестанская область"]
                ,null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Skills Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('skills', __("admin.skills")) !!}
                {!! Form::select('skills',[], null, ['class' => 'form-control skill','multiple'=>"","name"=>"skills[]"]) !!}
            </div>

            <!-- About Field -->
            <div class="form-group col-sm-12 ">
                {!! Form::label('about', __("admin.about") . "*") !!}
                {!! Form::textarea('about', null, ['class' => 'form-control editor']) !!}
            </div>



            <div class="form-group col-sm-12">
                {!! Form::label('img', __("admin.img")) !!}
                {!! Form::file('img',null, ['class' => 'form-control']) !!}
            </div>


            <!-- Password Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('password', __("admin.password")) !!}
                {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>



            <div class="card-footer">
                {!! Form::submit(__("admin.edit"), ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default">{{__("admin.cancel")}}</a>
            </div>

        {!! Form::close() !!}








        </div>

    </div>
</div>
@endsection
