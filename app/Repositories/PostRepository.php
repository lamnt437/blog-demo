<?php

namespace App\Repositories;

use App\Models\Post;

interface PostRepository
{
    public function model();

    public function paginate();

    public function show(Post $post);
}
