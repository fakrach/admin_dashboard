<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =['title','slug','category','image','description','price','oldPrice','quantity'];
    public function getRouteKeyName(){
        return 'slug';
    }
}
