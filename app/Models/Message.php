<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.sdfsdf
     *
     * @var array
     */
    protected $fillable = ['message','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
