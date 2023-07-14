<?php

namespace App\Jobs;

use App\Mail\PostPublished;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $users;
    protected $post;
    /**
     * Create a new job instance.
     */
    public function __construct($post, $users)
    {
        $this->users = $users;
        $this->post = $post;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach($this->users as $user){
            Mail::to($user->email)->send(new PostPublished($this->post));
        }    }
}
