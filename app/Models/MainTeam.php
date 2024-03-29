<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainTeam extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsToMany(TeamCategory::class, 'lawyer_category', 'lawyer_id', 'category_id');
    }

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
        $img->fit(235, 340, function ($constraint) {
            $constraint->upsize();
        });

        $img->save($file, 100);
    }
}
