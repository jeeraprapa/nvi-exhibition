<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booth extends Model
{
    use SoftDeletes;

    protected $table = "nvi_booths";

    protected $appends = ['logo_url'];


    public function posters ()
    {
        return $this->hasMany(File::class,'booth_id');
    }

    public function scopeProductionNetwork ($q)
    {
        return $q->where('type','PRODUCTION_NETWORK');
    }

    public function scopeResearch ($q)
    {
        return $q->where('type','RESEARCH');
    }

    public function scopeAssuranceVaccine ($q)
    {
        return $q->where('type','ASSURANCE_VACCINE');
    }

    public function getLogoUrlAttribute ()
    {
        if($this->logo) {
            return \Storage::disk('s3')->url($this->logo);
        }
    }

    public function getBoothImageUrlAttribute ()
    {
        if($this->booth_image) {
            return \Storage::disk('s3')->url($this->booth_image);
        }
    }

    public function getBoothDetailImageUrlAttribute ()
    {
        if($this->booth_detail_image) {
            return \Storage::disk('s3')->url($this->booth_detail_image);
        }
    }

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
