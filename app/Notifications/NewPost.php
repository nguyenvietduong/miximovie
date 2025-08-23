<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class NewPost extends Notification implements ShouldQueue
{
    // ..
    protected $following;
    protected $post;

    public function __construct(User $following, Post $post)
    {
        $this->following = $following;
        $this->post = $post;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'following_id' => $this->following->id,
            'following_name' => $this->following->name,
            'post_id' => $this->post->id,
        ];
    }
}
