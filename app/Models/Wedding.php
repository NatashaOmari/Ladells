<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;
    protected $table = 'weddings';
    protected $fillable = ['name','image','recipe'];
    public function user () {
        return $this->belongsTo(User::class);
    }
}
