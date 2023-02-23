<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCategory extends Model
{
    use HasFactory;

    public function lawyers()
    {
        return $this->belongsToMany(MainTeam::class, 'lawyer_category', 'category_id', 'lawyer_id');
    }
}
