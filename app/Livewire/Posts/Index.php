<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]

#[On('postCreated')]
class Index extends Component
{
    public function render()
    {
        $posts = Post::query()->with('user')->latest()->get();

        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
