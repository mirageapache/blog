<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <div class="container-fluid">
        <a class="navbar-brand" href="home">APP名稱</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register_page">註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_page">登入</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    更多選項
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">User List</a></li>
                        <li><a class="dropdown-item" href="#">---Unlock---</a></li>
                        <li><a class="dropdown-item" href="#">登出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- 訊息框 -->
<!--     @if(session()->has('message'))
        <div id="msg_panel" class="" style="background-color:{{session()->get('msg_color')}};">
            <i class="fa5 fa-times cancel_msg"></i>
            {{session()->get('message')}}
        </div>
    @endif -->

    <!-- 錯誤訊息 -->
<!--     @if($errors->any())
        <div id="msg_panel" class="" style="background-color:#ffabab;">
            <i class="fa5 fa-times cancel_msg"></i>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

</nav>

<style type="text/css">
    nav{
        border-bottom: .05rem solid #e5e5e5;
    }
</style>