<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $gaurded = [];
    
    public function images() {
        return $this->hasMany('App\Models\Project_img');
    }
}
