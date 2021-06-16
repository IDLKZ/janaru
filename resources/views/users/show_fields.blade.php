<img src="{{$user->img}}" width="450px">

<!-- Is Admin Field -->
<div class="col-sm-12">
    {!! Form::label('is_admin', __("admin.is_admin")) !!}
    <p>{{ $user->is_admin == 1 ? __("admin.admin") : __("admin.user") }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __("admin.name")) !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', __("admin.surname")) !!}
    <p>{{ $user->surname }}</p>
</div>

<!-- Middlename Field -->
<div class="col-sm-12">
    {!! Form::label('middlename', __("admin.middlename")) !!}
    <p>{{ $user->middlename }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', __("admin.phone")) !!}
    <p>{{ $user->phone }}</p>
</div>

<!-- Work Field -->
<div class="col-sm-12">
    {!! Form::label('work', __("admin.work")) !!}
    <p>{{ $user->work }}</p>
</div>

<!-- Birthday Field -->
<div class="col-sm-12">
    {!! Form::label('birthday', __("admin.birthday")) !!}
    <p>{{ $user->birthday }}</p>
</div>

<!-- City Field -->
<div class="col-sm-12">
    {!! Form::label('city', __("admin.city")) !!}
    <p>{{ $user->city }}</p>
</div>

<!-- Skills Field -->
<div class="col-sm-12">
    {!! Form::label('skills', __("admin.skills")) !!}
    @if($user->skills)
        <ul>
        @foreach(json_decode($user->skills) as $skill)
        <li>{{$skill}}</li>
        @endforeach
        </ul>
    @else
        <br>
    @endif
</div>

<!-- About Field -->
<div class="col-sm-12">
    {!! Form::label('about', __("admin.about")) !!}
    <p>{!! $user->about !!}  </p>
</div>

<!-- Email Verified Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified', __("admin.email_verified")) !!}
    <p>{{ $user->email_verified == 1 ? __("admin.confirmed") : __("admin.not_confirmed") }}</p>
</div>



