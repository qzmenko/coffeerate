<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Spatie\MediaLibrary\HasMedia;

trait AttachMediaTrait
{
    /**
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    private function attachMediasFromDirectory(Model $model, int $mediasCount = 1, string $directory = '../database/seeders/assets/photos', string $collectionName = ''): void
    {
        if (! ($model instanceof HasMedia)) {
            throw new \InvalidArgumentException('This method can only be used with HasMedia models.');
        }

        $filesPaths = File::files($directory);

        shuffle($filesPaths);
        $selectedFiles = array_slice($filesPaths, 0, $mediasCount);

        foreach ($selectedFiles as $filePath) {
            $file = new UploadedFile($filePath, basename($filePath));
            $model->copyMedia($file)->toMediaCollection($collectionName);
        }
    }
}
