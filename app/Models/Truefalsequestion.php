<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truefalsequestion extends Model
{
    use HasFactory;
    protected $table = 'truefalsequestions';

    protected $fillable=['quize_id' , 'type','title_questions','correct'];
}
