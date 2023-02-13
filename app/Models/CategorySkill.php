<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorySkill extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'category_skills';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'experience',
        'icone',
    ];
}
