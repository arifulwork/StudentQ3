<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
    protected $fillable = [
        'title',

    ];

    public function subject(){

        return $this->hasMany(Subject::class);

        

    }
}
