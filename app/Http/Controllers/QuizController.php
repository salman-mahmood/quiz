<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\quiz1\AppTraffic;
use App\Services\quiz1\NetTraffic;
use App\Services\quiz1\RegisterdUser;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function Q1(){
        $traffic = new AppTraffic();
        // $traffic->checkTraffic(new NetTraffic(10));
        $traffic->checkTraffic(new RegisterdUser(0));

        $total = $traffic->calculateTotalTraffic(10);
        return $total;
    }
    public function RegUser() {
        return view('userreg');
    }

    public function UserReg(Request $request) {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create(request(['name', 'email', 'password']));
        return back();
    }

    public function Posts() {
        return view('posts');
    }

    public function PublishPost(Request $request) {

        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create(request(['title', 'content']));
        // $user = $user->email;
        return back();
    }
    Public function centric(){
        return 'Hekllo';
    }
}
