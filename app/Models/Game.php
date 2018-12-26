<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    public $timestamps = true;
  
    protected $fillable = [
      'id',
      'title',
      'release_year',
      'genre',
      'deleted'
    ];
}
