<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntelectAbout extends Model
{
    use HasFactory;

    public function setImageAttribute($image)
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
        $img->resize(475, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $img->save($file, 100);
        
    }
}
