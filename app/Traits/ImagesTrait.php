<?php

namespace App\Traits;

trait ImagesTrait
{
    protected function saveImage($photo, $imageDirectory)
    {
        $imageName = time() . '.' . $photo->extension();

        $path = $imageDirectory;

        $photo->move($path, $imageName);

        return $imageName;
    }
}
