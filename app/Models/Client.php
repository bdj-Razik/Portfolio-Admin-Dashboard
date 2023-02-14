<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clients';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'photo',
    ];
}
