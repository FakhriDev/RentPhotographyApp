<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class album extends Model
{
    public function albums(){
        return $this->hasMany(\App\Models\photo::class,'kategori_id','id');
    }
}