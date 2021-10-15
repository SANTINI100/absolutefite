<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases extends Model
{
    use HasFactory;
    protected $table='clases';
    protected $fillable=[
        'fecha','hora','email','clase'
    ];
 
    public $timestamp = false;
}
