<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Gallery extends Model
{
    use HasSoftDelete;
    protected $table = "galleries";
    protected $fillable = ['image','advertise_id'];
    protected $deletedAt = 'deleted_at';
}