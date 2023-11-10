<?php

namespace Packages\App\Models;

use Illuminate\Database\Eloquent\Model;
use Shetabit\Visitor\Traits\Visitable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends Model implements HasMedia
{
    use InteractsWithMedia;
    use Visitable;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'description',
        'youtube_url',
        'slug',
    ];


}
