<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Relasi one-to-one: satu subject punya satu teacher
    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'subject_id');
    }
}
