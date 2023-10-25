<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function getBadgeColor(){
        return $this ? "<span class='badge' style='background-color:{$this->color}'>{$this->color}</span>" : "";
    }
}