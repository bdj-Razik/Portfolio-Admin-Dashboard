<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Qualification extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'qualifications';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'company_or_institue',
        'location',
        'start_date',
        'end_date',
        'description',
        'type_qualification_id',
    ];

    public function type()
    {
        return $this->belongsTo(TypeQualification::class, 'type_qualification_id');
    }

    public static function company()
    {
        return static::where('type_qualification_id', 1)->get()->count() ?? 0;
    }
}
