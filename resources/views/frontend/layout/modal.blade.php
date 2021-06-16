
<div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h5 class="modal-title font-weight-bold text-uppercase" id="exampleModalLabel">{{__("frontend.register")}}</h5>
                </div>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form action="{{route("registerUser")}}" method="post">
                    @csrf
                    <div class="container mt-4">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="name" class="col-form-label fs-14">{{__("admin.name")}}:</label>
                                <input type="text" max="255" class="form-control modal-input" id="name" name="name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="surname" class="col-form-label fs-14">{{__("admin.surname")}}:</label>
                                <input type="text" max="255" class="form-control modal-input" id="surname" name="surname">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middlename" class="col-form-label fs-14">{{__("admin.middlename")}} (*):</label>
                                <input type="text" max="255" class="form-control modal-input" id="middlename" name="middlename">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email" class="col-form-label fs-14">Email:</label>
                                <input type="email" max="255" class="form-control modal-input" id="email" name="email">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="phone" class="col-form-label fs-14">{{__("admin.phone")}}:</label>
                                <input type="text" max="255" class="form-control modal-input" id="phone" name="phone">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="work" class="col-form-label fs-14">{{__("admin.work")}} (*):</label>
                                <input type="text" max="255" class="form-control modal-input" id="work" name="work">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password" class="col-form-label fs-14">{{__("admin.password")}}:</label>
                                <input type="password" max="255" class="form-control modal-input" id="password" name="password">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="same_password" class="col-form-label fs-14">{{__("admin.same_password")}}:</label>
                                <input type="password" max="255" class="form-control modal-input" id="same_password" name="same_password">
                            </div>

                            <div class="form-group col-md-4">
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
                    <small>* - {{__("frontend.not_important")}}</small>
                    <div class="text-center">
                        <button type="submit" class="btn card-button">{{__("frontend.register")}}</button>

                        <button type="button" class="btn card-button" data-dismiss="modal">{{__("admin.cancel")}}</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-logo text-center">
                    <a class="font-weight-bold fs-24 text-dark" href=""><b>JANARU</b></a>
                </div>
                <div class="card border-0">
                    <div class="card-body login-card-body">
                        @if(session()->has('fail'))
                            <div class="alert alert-danger">
                                {{ session()->get('fail') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('auth') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="email"
                                       name="email"
                                       required
                                       value="{{ old('email') }}"
                                       placeholder="Email"
                                       class="form-control @error('email') is-invalid @enderror modal-input">

                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="input-group mb-3">
                                <input type="password"
                                       name="password"
                                       required
                                       placeholder="{{__("admin.password")}}"
                                       class="form-control @error('password') is-invalid @enderror modal-input">
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember" name="remember">
                                        <label for="remember">{{__("frontend.remember_me")}}</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">{{__("frontend.login")}}</button>
                                </div>

                                <div class="col-md-12">
                                    <a href="{{route("forget")}}">{{__("frontend.forget")}}</a>
                                </div>

                            </div>
                        </form>



                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 py-0 my-0">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="my-2 text-center">
                    <h1 class="modal-title fs-24 font-weight-normal text-dark text-uppercase" id="exampleModalLongTitle">
                        {{__("frontend.resume")}}
                    </h1>
                </div>
                <div class="text-center py-2">
                    <p>
                        {{__("frontend.resume_title")}}
                        <a href="mailto:janarujcu@gmail.com">
                            janarujcu@gmail.com
                        </a>
                    </p>
                </div>

                <div class="text-center">
                    <a href="/resume.txt" download="" class="btn btn-lg resume-button text-uppercase">
                        <div class="d-flex">
                            <div class="w-25 d-flex justify-content-center align-items-center px-4">
                                <i class="fas fa-download text-info"></i>
                            </div>
                            <div class="w-75">
                                <span class="fs-16">
                                  {{__("frontend.download")}}
                                </span>
                                <br>
                                <small class="fs-12">
                                    Резюме.docx
                                </small>
                            </div>
                        </div>



                    </a>
                </div>




                <small>
                    *{{__("frontend.resume_subtitle")}}
                </small>
            </div>
        </div>
    </div>
</div>

@auth()
<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-logo text-center">
                    <a class="font-weight-bold fs-24 text-dark" href=""><b>JANARU</b></a>
                </div>
                <div class="card border-0">
                    <div class="card-body login-card-body">
                        @if(session()->has('fail'))
                            <div class="alert alert-danger">
                                {{ session()->get('fail') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('write') }}">
                            @csrf
                            <input hidden value="{{  auth()->user()->surname . " " . auth()->user()->name }}" name="author">
                            <div class="input-group mb-3">
                                <input type="text"
                                       name="title"
                                       required
                                       value="{{ old('title') }}"
                                       placeholder="Заголовок"
                                       class="form-control  modal-input">
                            </div>

                            <div class="input-group mb-3">
                                <select class="form-select w-100" aria-label="Default select example" name="course_id">
                                    @foreach(\App\Models\Category::all() as $category)

                                        <option value="{{$category->id}}">
                                            {{LaravelLocalization::getCurrentLocale() == "ru" ? $category->title_ru : $category->title_kz}}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <textarea class="w-100" name="description" required>



                                </textarea>


                            </div>



                            <div class="row">

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-block">Оставить отзыв</button>
                                </div>


                            </div>
                        </form>



                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
