<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'portfolios';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'period',
        'client_id',
        'link',
        'description',
        'image',
    ];

    public function client()
    {

        return $this->belongsTo(Client::class, 'client_id');
    }
}
