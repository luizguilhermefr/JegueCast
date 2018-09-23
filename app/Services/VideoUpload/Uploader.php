<?php

namespace App\Services\VideoUpload;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Uploader
{
    /**
     * Upload a file to the default filesystem.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return string The file location
     * @throws \Exception
     */
    public static function upload(UploadedFile $file)
    {
        $fileLocation = Storage::put('videos', $file);

        return $fileLocation;
    }
}
