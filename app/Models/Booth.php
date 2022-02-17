<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booth extends Model
{
    use SoftDeletes;

    protected $table = "nvi_booths";

    protected $fillable = [

    ];

    public function posters ()
    {
        return $this->hasMany(File::class,'booth_id');
    }
}
