<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "item",
        "status"
    ];


    public function users(){
        return $this->belongsTo(User::class);
    }
}
