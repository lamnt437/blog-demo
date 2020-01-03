<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepositoryEloquent implements PostRepository
{
    public function model()
    {
        return Post::query();
    }

    public function paginate()
    {
        return $this->model()
                    ->with([
                        'user',
                        'category',
                        'tags',
                        'comments',
                    ])
                    ->paginate(15);
    }

    public function show(Post $post)
    {
        return $post->load([
            'user',
            'category',
            'tags',
            'comments.user',
        ]);
    }
}
