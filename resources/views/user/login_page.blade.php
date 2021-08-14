<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>部落格系統-登入</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- 導入 css & js -->
        @include('layout/js')
        @include('layout/css')
        <link href="{{ asset('../resources/style/user/login_page.css') }}" rel="stylesheet">
        <link href="{{ asset('../resources/style/form.css') }}" rel="stylesheet">

    </head>
    <body id="login_page">
        @include('layout/navbar')
        @include('layout/msg')
        <div id="body_frame">
            <h3 id="page_title"><i>登入會員</i>&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
            <div id="content_frame">
                <div class="content">
                    <form action="{{route('user.login')}}" method="post">
                        @csrf
                        <div class="form_div">
                            <input class="form-control" type="text" name="account" placeholder="帳號" aria-label="">
                            <input class="form-control" type="password" name="password" placeholder="密碼" aria-label="">
                        </div>
                        <button id="confirm_btn" class="btn btn-success">登入</button>
                        <div class="">
                            <a class="link no_line" href="">忘記密碼</a>
                            <a class="link no_line" href="register_page">前往註冊</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layout/footer')
    </body>
</html>
