<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allevents extends Model
{
    use HasFactory;
    protected $table = 'allevents';
    protected $fillable = ['name','image','recipe'];
    public function user () {
        return $this->belongsTo(User::class);
    }
}
