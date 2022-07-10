<?php

namespace App\Http\Livewire\Comments;

use Livewire\Component;
use App\Models\Comments;

class Comment extends Component
{
    public $post;
    protected $listeners =['commentAdded' => 'render'];
    public function render()
    {
        $comments = Comments::where('post_id', $this->post->id)->get();
        return view('livewire.comments.comment',  ['comments' => $comments]);
    }
}
