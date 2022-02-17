<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $table = "nvi_booth_files";

    protected $fillable = [

    ];

    public function booth ()
    {
        return $this->belongsTo(Booth::class,'booth_id');
    }

}
