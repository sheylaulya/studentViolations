<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn','name','gender','kelas_id','address','email','pass'
    ];

    public function kelas()
    {
        return $this->hasMany(kelas::class, 'id', 'id');
    }
}
