    <!-- 訊息框 -->
    @if(session()->has('message'))
        <div id="msg_panel" class="" style="background-color:{{session()->get('msg_color')}};">
            <i class="fa5 fa-times cancel_msg"></i>
            {{session()->get('message')}}
        </div>
    @endif

    <!-- 錯誤訊息 -->
    @if($errors->any())
        <div id="msg_panel" class="" style="background-color:#ffabab;">
            <i class="fa5 fa-times cancel_msg"></i>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif