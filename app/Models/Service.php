<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'services';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

}
