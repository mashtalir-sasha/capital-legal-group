<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VidkrUsaLider extends Model
{
    use HasFactory;

    public function setPhotoAttribute($image)
    {
        if (isset($this->attributes['photo']) && $this->attributes['photo'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['photo'];
            if (file_exists($file)) {
                @unlink($file);
            }
        }
        $this->attributes['photo'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;

        $img = \Image::make($file);
        $img->fit(455, 560, function ($constraint) {
            $constraint->upsize();
        });

        $img->save($file, 100);
    }

    /*public function setImageAttribute($image)
    {
        if (isset($this->attributes['image']) && $this->attributes['image'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image'];
            if (file_exists($file)) {
                @unlink($file);
            }
        }
        $this->attributes['image'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;

        $img = \Image::make($file);
        $img->resize(403, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $img->save($file, 100);
    }*/
}