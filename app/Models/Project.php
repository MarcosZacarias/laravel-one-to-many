<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "name_repo",
        "slug",
        "img_path",
        "description",
    ] ;

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function getTypeColor(){
        return $this->type ? "background-color:{$this->type->color}" : "background-color: #FFFFFF";
    }
}