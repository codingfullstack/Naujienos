<?php

namespace App\Http\Livewire\Comments;

use Livewire\Component;
use App\Models\Comments;

class CommentCreate extends Component
{
    public $post, $email, $text;
    public function render()
    {
        return view('livewire.comments.comment-create');
    }
    protected $rules = [
        'email' =>'required|email',
        'text' =>'required|min:2'
    ];
    public function save()
    {
        $this->validate();

        Comments::create([
            'post_id'=> $this->post->id,
            'email'=> $this->email,
            'text'=> $this->text
        ]);
        $this->email = '';
        $this->text = '';
        $this->emit('commentAdded');

    }
}
