<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descriptivequestion extends Model
{
    use HasFactory;
    protected $table='descriptivequestions';
    protected $fillable=['quize_id' ,'type','title_questions'];
}
