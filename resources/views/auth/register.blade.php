<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q=="
          crossorigin="anonymous"/>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>
    @include("frontend.layout.styles")
    <style>
        @media screen and (min-width: 768px ) {
            .registerpage{
                background: #d0caca;
                margin: 20px;

            }

        }


    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="registerpage">
    <div class="container">


    <div class="row">
        <div class="col-md-8 offset-md-2 bg-white py-4 rounded">
            <div class="text-center">
                <h5 class="font-weight-bold text-uppercase" id="exampleModalLabel">Регистрация</h5>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('fail'))
                <div class="alert alert-danger">
                    {{ session()->get('fail') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route("registerUser")}}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-12 ">
                            <label for="name" class="col-form-label fs-14">{{__("admin.name")}}:</label>
                            <input type="text" max="255" class="form-control modal-input" id="name" name="name">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="surname" class="col-form-label fs-14">{{__("admin.surname")}}:</label>
                            <input type="text" max="255" class="form-control modal-input" id="surname" name="surname">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="middlename" class="col-form-label fs-14">{{__("admin.middlename")}} (*):</label>
                            <input type="text" max="255" class="form-control modal-input" id="middlename" name="middlename">
                        </div>

                        <div class="form-group col-md-12 ">
                            <label for="email" class="col-form-label fs-14">Email:</label>
                            <input type="email" max="255" class="form-control modal-input" id="email" name="email">
                        </div>

                        <div class="form-group col-md-12 ">
                            <label for="phone" class="col-form-label fs-14">{{__("admin.phone")}}:</label>
                            <input type="text" max="255" class="form-control modal-input" id="phone" name="phone">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="work" class="col-form-label fs-14">{{__("admin.work")}} (*):</label>
                            <input type="text" max="255" class="form-control modal-input" id="work" name="work">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="password" class="col-form-label fs-14">{{__("admin.password")}}:</label>
                            <input type="password" max="255" class="form-control modal-input" id="password" name="password">
                        </div>
                        <div class="form-group col-md-12 ">
                            <label for="same_password" class="col-form-label fs-14">{{__("admin.same_password")}}:</label>
                            <input type="password" max="255" class="form-control modal-input" id="same_password" name="same_password">
                        </div>

                        <div class="form-group col-md-12 ">
                            <label for="birthday" class="col-form-label fs-14">{{__("admin.birthday")}}:</label>
                            <input type="text" max="255" class="form-control modal-input datepicker" id="birtday" name="birthday">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="city" class="col-form-label fs-14">{{__("admin.city")}}:</label>
                            <select class="form-control modal-input" id="city" name="city">
                                <option value="Нур-Султан">Нур-Султан</option>
                                <option value="Алма-Ата">Алма-Ата</option>
                                <option value="Шымкент">Шымкент</option>
                                <option value="Караганда">Караганда</option>
                                <option value="Актобе">Актобе</option>
                                <option value="Тараз">Тараз</option>
                                <option value="Павлодар">Павлодар</option>
                                <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                <option value="Семей">Семей</option>
                                <option value="Атырау">Атырау</option>
                                <option value="Костанай">Костанай</option>
                                <option value="Рудный">Рудный</option>
                                <option value="Экибастуз">Экибастуз</option>
                                <option value="Талдыкорган">Талдыкорган</option>
                                <option value="Кызылорда">Кызылорда</option>
                                <option value="Уральск">Уральск</option>
                                <option value="Петропавловск">Петропавловск</option>
                                <option value="Темиртау">Темиртау</option>
                                <option value="Кокшетау">Кокшетау</option>
                                <option value="Актау">Актау</option>
                                <option value="Туркестан">Туркестан</option>
                                <option value="Акмолинская область">Акмолинская область</option>
                                <option value="Актюбинская область">Актюбинская область</option>
                                <option value="Алматинская область">Алматинская область</option>
                                <option value="Атырауская область">Атырауская область</option>
                                <option value="Восточно-Казахстанская область">Восточно-Казахстанская область</option>
                                <option value="Жамбылская область">Жамбылская область</option>
                                <option value="Западно-Казахстанская область">Западно-Казахстанская область</option>
                                <option value="Карагандинская область">Карагандинская область</option>
                                <option value="Костанайская область">Костанайская область</option>
                                <option value="Кызылординская область">Кызылординская область</option>
                                <option value="Мангистауская область">Мангистауская область</option>
                                <option value="Павлодарская область">Павлодарская область</option>
                                <option value="Северо-Казахстанская область">Северо-Казахстанская область</option>
                                <option value="Туркестанская область">Туркестанская область</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="skills" class="col-form-label fs-14">{{__("admin.skills")}} (*):</label>
                            <select class="form-control modal-input skill" id="city" name="skills[]" style="width: 100%">
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="about_me" class="col-form-label fs-14">{{__("admin.about")}} (*):</label>
                            <input type="text" max="255" class="form-control modal-input" id="about_me" name="about">
                        </div>


                    </div>
                </div>
                <small>* - необязательные поля</small>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">{{__("frontend.register")}}</button>
                </div>


            </form>
            <div class="text-center mt-2">
                <a href="{{url("/login")}}" class="btn btn-info">{{__("frontend.login")}}</a>

            </div>

        </div>
    </div>
    </div>

    <!-- /.form-box -->

<!-- /.register-box -->

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>
    @include("frontend.layout.scripts")
</body>
</html>
