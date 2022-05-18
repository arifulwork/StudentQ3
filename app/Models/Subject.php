<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    protected $fillable = [
        'title',
        'seats',
        'date',
        'starttime',
        'endtime',
        'course_id',
        
    ];

    public function course(){

        return $this->belongsTo(Course::class);

    }
}
