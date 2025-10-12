<?php

namespace App\Http\traits;

use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    public function makeImage($image) {
        $path = Storage::disk('public')->put("storage/images", $image);
        dd($path);
        return $path;
    }
}
