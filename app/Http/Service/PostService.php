<?php

namespace App\Http\Service;

use {
    App\Models\Post,
    Illuminate\Support\Facades\DB
};


class PostService {
    /**
     * @param $data
     * @return void
     */
    public function create($data)
    {
        $name = $data['name'];
        $description = $data['description'];
        $content = $data['content'];
        $preview_image = Post::makePostImage($data['preview_image']);
        $main_image = Post::makePostImage($data['main_image']);
        $user_id = auth()->user()->id;
        try {
            DB::beginTransaction();

            Post::create([
                'name' => $name,
                'description' => $description,
                'content' => $content,
                'preview_image' => $preview_image,
                'main_image' => $main_image,
                'user_id' => $user_id
            ]);

            DB::commit();
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
        }
    }

    public function update(Post $post, $data)
    {

    }

    public function delete()
    {

    }
}
