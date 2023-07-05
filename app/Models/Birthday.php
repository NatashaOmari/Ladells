<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    use HasFactory;
    //protected $table = 'birthdays';
    //protected $fillable = ['user_id','name','image','recipe'];
    public function user () {
        return $this->belongsTo(User::class);
    }
}
