@extends('layouts.app', ['class' => 'login-page','contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf
            <div class="card card-login card-white">

                    <h1 style="color:#cf51de;font-weight: bolder" class="text-center mt-3">تسجيل الدخول</h1>
                <div class="card-body">
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{-- <i class="tim-icons icon-email-85"></i> --}}
                            </div>
                        </div>
                        <input type="email" name="email" class="text-right form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="البريد الالكتروني">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                {{-- <i class="tim-icons icon-lock-circle"></i> --}}
                            </div>
                        </div>
                        <input type="password" placeholder="كلمة المرور" name="password" class="text-right form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">تسجيل الدخول</button>
                    <div class="text-center mt-3"style="color:#cf51de;font-weight: bolder" >
                            <a href="{{ route('password.request') }}" class="link footer-link">نسيت كلمة السر؟</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
