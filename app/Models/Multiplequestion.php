<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiplequestion extends Model
{
    use HasFactory;
    protected $table = 'multiplequestions';

    protected $fillable = [
        'quize_id',
        'type',
        'title_questions',
        'options',
        'correct'
    ];
    public function quize()
    {
        return $this->beforeQuery(Quiz::class);
    }
}
