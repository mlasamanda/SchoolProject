<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $fillable=[
    'depcode',
    'depname',
    ];
 public function programme(){
     return $this->belongsTo(programme::class);
}
}
