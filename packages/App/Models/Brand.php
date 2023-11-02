<?php

namespace Packages\App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'description',
        'youtube_url',
        'slug',
    ];


}
