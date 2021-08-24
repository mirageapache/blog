<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factory;

class User extends Model
{

    use Has Factory;

    protected $fillable = [
    	'user_id','user_account','user_password','user_name','email','phone_num','user_type','avaliable'
	];




}
