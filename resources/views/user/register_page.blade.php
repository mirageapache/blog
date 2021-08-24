<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>部落格系統-註冊</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- 導入 css & js -->
        @include('layout/js')
        <script src="{{ asset('../resources/script/form_validation.js') }}"></script>
        @include('layout/css')
        <link href="{{ asset('../resources/style/user/register_page.css') }}" rel="stylesheet">
        <link href="{{ asset('../resources/style/form.css') }}" rel="stylesheet"> 

    </head>
    <body id="register_page">
        @include('layout/navbar')
        @include('layout/msg')
        <div id="body_frame">
            <h3 id="page_title"><i>註冊會員</i>&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
            <p>{{ $request }}</p>
            <div id="content_frame">
                <label class="hint_label"><i class="fa5 fa-info-circle"></i> 輸入個人資訊以註冊成為會員。(<i class="red_star">*</i>為必填欄位)</label>
                <div class="content">
                    <form action="{{route('user.register')}}" method="post">
                        @csrf
                        <div class="form_div row">
                            <span class="col-md-6">
                                <label class="form_label">帳號<i class="red_star">*</i></label>
                                @if($errors->has('account'))
                                    <label class="error_hint">{{$errors->first('account')}}</label>
                                @endif
                                <input class="form-control" type="text" name="account" placeholder="" aria-label="" value="{{old('account')}}">
                            </span>
                            <span class="col-md-6">
                                <label class="form_label">暱稱<i class="red_star">*</i></label>
                                @if($errors->has('user_name'))
                                    <label class="error_hint">{{$errors->first('user_name')}}</label>
                                @endif
                                <input class="form-control" type="text" name="user_name" placeholder="" aria-label="" value="{{old('user_name')}}">
                            </span>
                            <span class="col-md-6">
                                <label class="form_label">建立密碼<i class="red_star">*</i></label>
                                @if($errors->has('password'))
                                    <label class="error_hint">{{$errors->first('password')}}</label>
                                @endif
                                <input class="form-control" type="password" name="password" placeholder="" aria-label="" value="{{old('password')}}">
                            </span>
                            <span class="col-md-6">
                                <label class="form_label">確認密碼<i class="red_star">*</i></label>
                                @if($errors->has('confirm_password'))
                                    <label class="error_hint">{{$errors->first('confirm_password')}}</label>
                                @endif
                                <input class="form-control" type="password" name="confirm_password" placeholder="" aria-label="" value="{{old('confirm_password')}}">
                            </span>
                            <span class="col-md-6">
                                <label class="form_label">E-mail<i class="red_star">*</i></label>
                                @if($errors->has('email'))
                                    <label class="error_hint">{{$errors->first('email')}}</label>
                                @endif
                                <input class="form-control" type="email" name="email" placeholder="" aria-label="" value="{{old('email')}}">
                            </span>
                            <span class="col-md-6">
                                <label class="form_label">電話</label>
                                <input class="form-control" type="tel" name="phone" placeholder="" aria-label="">
                            </span>
                        </div>
                        <button id="confirm_btn" class="btn btn-success">註冊</button>

                    </form>
                </div>
            </div>
        </div>
        @include('layout/footer')
    </body>
</html>
