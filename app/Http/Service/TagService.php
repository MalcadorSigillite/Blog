<?php

namespace App\Http\Service;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagService
{
    /**
     * @param $data
     * @return void
     */
    public function create($data): void
    {

        $name = $data['name'];

        try {
            DB::beginTransaction();

            Tag::create([
                'name' => $name
            ]);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    /**
     * @param Tag $tag
     * @param $data
     * @return void
     */
    public function update(Tag $tag, $data): void
    {
        $name = $data['name'];

        try {
            DB::beginTransaction();

            $tag->update([
                'name' => $name
            ]);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
        }

    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function delete(Tag $tag): void
    {
        $posts_count = Post::where('tag_id', $tag->id)->count();
        for($i = 0; $i < $posts_count; $i++) {
            Post::where('tag_id', $tag->id)->delete();
        }
        $tag->delete();
    }

    /**
     * @param $data
     * @return \Illuminate\Support\Collection
     */

    public function search($data)
    {

        $name = $data['name'];

        $query = DB::table('tags');

        $query->where('name', "LIKE", "%{$name}%");

        $tags = $query->get();
        dd($tags);
        return $tags;
    }

}
