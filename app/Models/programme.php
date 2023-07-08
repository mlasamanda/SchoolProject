<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programme extends Model
{
    use HasFactory;
    protected $fillable=[
 
    'pname',
    'fee',
    'duration',
    ];
   public function department(){
 return $this->hasMany(department::class);
}
    //public function users():BelongsToMany
    //{
      //  return $this->belongsTo(User::class,'prog_id','id');
    //}
}
