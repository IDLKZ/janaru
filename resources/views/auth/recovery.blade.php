<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Вход в личный кабинет</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page" >
<div class="login-box">

    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card">
        <div class="card-body login-card-body">
            <div class="login-logo">
                <a class="text-warning font-weight-bold" href="/"><b>JANARU</b></a>
            </div>
            <p class="login-box-msg">{{__("frontend.reset_password")}}</p>
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
            <form method="post" action="{{ route('reset-password') }}">
                @csrf
                <input hidden value="{{$code}}" name="code">
                <div class="input-group mb-3">
                    <input type="email"
                           name="email"
                           disabled
                           value="{{$user->email}}"
                           placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group col-md-12 ">
                    <label for="password" class="col-form-label fs-14">{{__("admin.password")}}:</label>
                    <input type="password" max="255" class="form-control modal-input" id="password" name="password">
                </div>
                <div class="form-group col-md-12 ">
                    <label for="same_password" class="col-form-label fs-14">{{__("admin.same_password")}}:</label>
                    <input type="password" max="255" class="form-control modal-input" id="same_password" name="same_password">
                </div>


                <div class="row">

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">{{__("frontend.reset")}}</button>
                    </div>


                </div>
            </form>

            {{--                <p class="mb-1">--}}
            {{--                    <a href="{{ route('password.request') }}">{{__("frontend.forget")}}</a>--}}
            {{--                </p>--}}
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('register') }}">{{__("frontend.register")}}</a>


                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('login') }}">{{__("frontend.login")}}</a>

                </div>
            </div>



        </div>
        <!-- /.login-card-body -->
    </div>

</div>
<!-- /.login-box -->

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

</body>
</html>

