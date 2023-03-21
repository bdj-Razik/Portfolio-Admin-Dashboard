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
        'sub_title',
        'first_name',
        'last_name',
        'experience',
        'email',
        'github',
        'linkedin',
        'twitter',
        'facebook',
        'instagram',
        'dribbble',
        'phone',
        'adresse',
        'description',
        'cv',
        'logo',
    ];

}
