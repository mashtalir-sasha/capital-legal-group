<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainReviews extends Model
{
    use HasFactory;

    public function setImageAttribute($image)
    {
        if (isset($this->attributes['image']) && $this->attributes['image'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image'];
            $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);
            if (file_exists($file)) {
                @unlink($file);
            }
            if (file_exists($smallFile)) {
                @unlink($smallFile);
            }
        }
        $this->attributes['image'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;
        $smallFile = public_path() . '/images/uploads/thumb/' . basename($file);

        $img = \Image::make($file);
        $img->resize(null, 900, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save($file, 100);

        $img->resize(null, 180, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save($smallFile, 100);
    }
}
