<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    /**
     * The homeroomTeacher that belong to the kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function homeroomTeacher()
    {
        return $this->belongsTo(teacher::class,'teacher_id','id');
    }
}
