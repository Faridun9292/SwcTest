@extends("layouts.auth")

@section("content")
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
                                        <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="login" class="form-label">Login</label>
                                                <input type="text" id="login" value="{{old('login' ?? null)}}" class="form-control @error('login') is-invalid @enderror"
                                                       name="login">

                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Пароль</label>
                                                <input type="password" class="form-control @error('login') is-invalid @enderror" id="password" name="password"
                                                       autocomplete="current-password" placeholder="Password">
                                                @error('login')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form check d-flex justify-content-between gap-2 flex-wrap">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" name="remember"
                                                           id="authCheck" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="authCheck">
                                                        Запомнить меня
                                                    </label>
                                                </div>
                                                <a href="{{route('register')}}">Регистрация</a>
                                            </div>
                                            <div>
                                                <button type="submit"
                                                        class="btn btn-success me-2 mb-2 mb-md-0 text-white">Войти
                                                </button>
                                            </div>
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
