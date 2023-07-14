<?php

namespace App\Services\quiz2;

use App\Jobs\SendEmails;
use App\Mail\PostPublished;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class PostObserver
{
    public function created($post){
        $users = User::all();
        $sendemails = new SendEmails($post, $users);
        dispatch($sendemails);
}
}
