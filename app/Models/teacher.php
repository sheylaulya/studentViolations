<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'nipd','name','gender','address','lesson','telp','email','pass','kelas_id'
    ];
    public function homeroomTeacher()
    {
        return $this->hasOne(kelas::class,'id','id');
    }
}
