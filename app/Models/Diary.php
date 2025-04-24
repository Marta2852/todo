<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['title', 'body', 'date', 'user_id']; // add 'user_id'

    public function user()
    {
        return $this->belongsTo(User::class); // Define the relationship
    }
}
