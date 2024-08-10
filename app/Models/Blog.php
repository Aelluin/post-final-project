<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];
     protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
