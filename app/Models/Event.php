<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'title', 'start', 'end'
    ];


    public function getEvent()
    {
        return [];
    }
}