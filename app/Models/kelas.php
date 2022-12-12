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

     /**
      * Get all of the students for the kelas
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
   
      
    protected $fillable = [
        'name'
    ];
    
    public function homeroomTeacher()
    {
        return $this->belongsTo(teacher::class,'teacher_id','id');
    }
}
