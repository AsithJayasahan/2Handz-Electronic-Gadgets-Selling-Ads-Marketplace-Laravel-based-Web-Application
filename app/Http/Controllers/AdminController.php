<?php

namespace App\Http\Controllers;

use  App\Models\contact;
use App\Models\Add;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use illuminate\support\Facades\Auth;

class AdminController extends Controller
{

    public function showUsers()
    {
        $user = User::all();
        return view('showUsers', compact('user'));
    }

    public function showAds()
    {
        $ads = Add::all();
        return view('showAds', compact('ads'));
    }

    public function postAds()
    {
        return view('AdminPostAds');
    }

    public function showMessage(){
        $message = contact::all();
        return view('showMessage', compact('message'));
    }


}
