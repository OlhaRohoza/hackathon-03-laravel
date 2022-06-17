<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Owner;


class Animal extends Model
{
    use HasFactory;
    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function owners()
    {
        return $this->belongsTo(Owner::class);
    }
}
