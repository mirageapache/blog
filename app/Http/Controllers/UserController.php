<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Register;

class UserController extends Controller
{
    //註冊頁
	function register_page(request $req){
		$req = $req->input('test'); //取得網址參數 ?test=X

		if($req == null)
			$req="";

		return view('user/register_page', [
			'request' => $req
		]);			
	}

    //註冊(寫入資料)
	function register(register $req){
		//註冊使用者資料

		$data['user_id'] = generate_id(); //呼叫自訂函式 generate_id()
		$data['user_account'] = $req->input('account');
		$data['user_password'] = $req->input('password');
		$data['user_name'] = $req->input('user_name');
		$data['email'] = $req->input('email');

		if( strlen($req->input('phone')) > 0)
			$data['phone_num'] = $req->input('phone');
		else
			$data['phone_num'] = null;

		// 寫入資料庫
		DB::insert("insert into users (user_id,user_account,user_password,user_name,email,phone_num) values (?,?,?,?,?,?)",[$data['user_id'],$data['user_account'],$data['user_password'],$data['user_name'],$data['email'],$data['phone_num']]);

		return redirect()->route('home')->with(['message'=>'註冊成功！','msg_color'=>'#acffa6']);

	}

	//登入頁
	function login_page(request $req){


		$req="";

		return view('user/login_page', [
			'request' => $req
		]);	

	}

	// 登入
	function login(request $req){
		$account = $req->input('account');
		$password = $req->input('password');

		// 檢查帳號是否已註冊
		$exist = DB::table('users')->where('user_account', $account)->count();


		if ($exist != 1) {
			return redirect()->route('user.login_page')->with(['message'=>'帳號不存在！','msg_color'=>'#ffabab']);
		}
		else{
			return redirect()->route('user.login_page')->with(['message'=>'已註冊！','msg_color'=>'#acffa6']);
		}



		// $users = DB::select('select * from users where user_account = ?', [$data['user_account']]);



	}


	//登出
	function logout(){



	}
	
}
