<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ImageOptimizationObserver
{
    public function saved(Model $model): void
    {
        if (empty($model->imageFields)) {
            return;
        }

        foreach ($model->imageFields as $field) {
            if ($model->wasRecentlyCreated) {
                $path = $model->$field;
            } else {
                $path = $model->wasChanged($field) ? $model->$field : null;
            }

            if (!$path) {
                continue;
            }

            $fullPath = Storage::disk('public')->path($path);

            if (!file_exists($fullPath)) {
                continue;
            }

            try {
                Image::make($fullPath)
                    ->resize(1200, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->save($fullPath, 80);
            } catch (\Exception $e) {
                logger()->warning("ImageOptimizer: échec sur {$fullPath} — " . $e->getMessage());
            }
        }
    }
}
