<?php

namespace App\Custom;

use App\Models\Admin\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public static function upload($model, $file, $oldFile = null, $type = 'default')
    {
        if ($oldFile !== null) {
            Storage::delete($oldFile);
        }
        $fileName = rand() . time() . '.' . $file->extension();
        $path = "uploads/" . Carbon::now()->format('Y') . "/" . Carbon::now()->format('M') . '/';
        $filePath = $path . $fileName;
        $file->storeAs($path, $fileName);
        $user = Auth::user();
        $image = Image::UpdateOrCreate(
            [
                'imageable_id' => $model->id,
                'imageable_type' => get_class($model),
                'type' => $type,
            ],
            [
                'imageable_id' => $model->id,
                'imageable_type' => get_class($model),
                'path' => $filePath,
                'name' => $fileName,
                'uploadable_id' => $user->id,
                'uploadable_type' => get_class($user),
                'type' => $type,
            ]
        );
        return $image->id;
    }

    public function delete($model)
    {
        $image = Image::where(['imageable_id' => $model->id, 'imageable_type' => get_class($model)])->first();
        if ($image) {
            // dd(auth()->user()->id, $image->uploaded_by_id);
            if (auth()->user()->id != $image->uploaded_by_id) {
                return 'mismatch';
            }
            if ($image->path != '') {
                Storage::delete($image->path);
            }
            $image->delete();
            return true;
        }
        return 0;
    }
}
