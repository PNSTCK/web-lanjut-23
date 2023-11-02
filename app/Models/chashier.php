<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chashier extends Model
{
    use HasFactory;

    protected $table = 'chashier';
    protected $fillable = ['id', 'name', 'phone', 'age'];
}
