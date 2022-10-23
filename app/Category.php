<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Category extends Model
{

    use HasSoftDelete;
    protected $table = "categories";
    protected $fillable = ['name','parent_id'];
    protected $deletedAt = 'deleted_at';


    public function parent()
    {
        return $this->belongsTo('\App\Category', 'parent_id', 'id');
    }

    public function ads()
    {
        return $this->hasMany('\App\Ads', 'cat_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany('\App\Post', 'cat_id', 'id');
    }
   

}