<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user;

class UserProfile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'profile']]);
    }
    public function profile(){
        $teachers=User::find();
        return view('teachers.myprofile',compact('teachers'));
    }
}
