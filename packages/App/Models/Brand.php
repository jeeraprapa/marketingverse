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

    public function getYoutubeCoverUrlAttribute ()
    {
        if($this->youtube) {
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $this->youtube, $matches);

            return $this->youtube_image($matches[1]);
        }
    }

    function youtube_image($id) {

        return "http://img.youtube.com/vi/$id/mqdefault.jpg";
    }


}
