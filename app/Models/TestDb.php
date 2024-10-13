<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDb extends Model
{
    use HasFactory;

    protected $table = 'test_db';

    public $timestamps = true; 

    protected $fillable = [
        'name',
        'address',
    ];
}
