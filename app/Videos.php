<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'sorforn','thumbnail','youtubelink','uploaddatetime','file_link','created_at','updated_at'
    ];
    public $timestamps=true;
}
