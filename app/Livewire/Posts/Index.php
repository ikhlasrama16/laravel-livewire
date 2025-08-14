<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Component;

#[Lazy()]

#[On('postCreated')]
class Index extends Component
{
    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        sleep(1); // Simulate a delay for demonstration purposes
        $posts = Post::query()->with('user')->latest()->get();

        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
