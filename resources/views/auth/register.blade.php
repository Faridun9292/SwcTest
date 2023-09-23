@extends('layouts.auth')

@section('content')
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <form class="forms-sample" method="post" href="{{route('register')}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Фамилия <span style="color: red">*</span></label>
                                                <input type="text" class="{{$errors->has('surname') ? 'form-control is-invalid' : 'form-control'}}" value="{{old('surname') ?? null}}"  id="exampleInputUsername1" name="surname"  placeholder="Фамилия">
                                                @if ($errors->has('surname'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('surname') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Имя <span style="color: red">*</span></label>
                                                <input type="text" class="{{$errors->has('name') ? 'form-control is-invalid' : 'form-control'}}" id="exampleInputUsername1" value="{{old('name') ?? null}}" name="name"  placeholder="Имя">
                                                @if ($errors->has('name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">День рождения</label>
                                                <input type="date" class="{{$errors->has('birthday') ? 'form-control is-invalid' : 'form-control'}}" name="birthday" value="{{old('birthday') ?? null}}" id="birthday" placeholder="День рождения">
                                                @if ($errors->has('birthday'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('birthday') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Логин<span style="color: red">*</span></label>
                                                <input type="text" class="{{$errors->has('login') ? 'form-control is-invalid' : 'phone form-control'}}" id="phone" name="login" value="{{old('login') ?? null}}"   placeholder="Логин">
                                                @if ($errors->has('login'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('login') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Пароль<span style="color: red">*</span></label>
                                                <input type="password" class="{{$errors->has('password') ? 'form-control is-invalid' : 'form-control'}}" id="userPassword" name="password" autocomplete="current-password" placeholder="Пароль">
                                                @if ($errors->has('password'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Подтверждение пароль <span style="color: red">*</span></label>
                                                <input type="password" class="form-control" id="userPassword" name="password_confirmation" autocomplete="current-password" placeholder="Пароль">
                                            </div>

                                            <div>
                                                <button  type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0">Зарегистрироваться</button>
                                            </div>
                                            <a href="{{route('login')}}" class="d-block mt-3 text-muted">Уже зарегистрированы? Авторизуйся</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
