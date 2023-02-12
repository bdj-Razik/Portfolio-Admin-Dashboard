<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'github',
        'linkedin',
        'twitter',
        'facebook',
        'phone',
        'adresse',
        'description',
    ];

}
