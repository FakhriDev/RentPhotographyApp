<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'title', 
        'start', 
        'end'
    ];    

    public function package(){
        return $this->belongsTo(\App\Models\package::class,'id_paket','id');
    }
}