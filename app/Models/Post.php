<?php

namespace App\Models;

use App\Http\traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use ImageTrait;

    public static function makePostImage($image) {
        $image = ImageTrait::class->makeImage($image);
        dd($image);
        return $image;
    }

}
