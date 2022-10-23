<?php

namespace App;

use System\Database\ORM\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = ['user_id','parent_id', 'comment', 'status', 'approved', 'post_id'];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function child()
    {
        return $this->hasMany('\App\Comment', 'parent_id', 'id');
    }

}