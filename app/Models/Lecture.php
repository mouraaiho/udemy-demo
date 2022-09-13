<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'type',
        'file',
        'is_downloadable',
        'duration',
        'status',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
