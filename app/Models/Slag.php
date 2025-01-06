<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slag extends Model
{
    use HasFactory;
    protected $table = 'slagok';
    protected $fillable = [
        'nev', 'hossz', 'anyaga', 'nyomasallo', 'csatlakozo_meret', 'ar', 'kep'
    ];
    public $timestamps = false;
}