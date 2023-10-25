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
        "type_id",
    ] ;

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function getTypeColor(){
        return $this->type ? "background-color:{$this->type->color}" : "background-color: #FFFFFF";
    }

    public function getTypeBadge(){
        return $this->type ? "<span class='badge' style='background-color:{$this->type->color}'>{$this->type->label}</span>" : "Untyped";
    }
}