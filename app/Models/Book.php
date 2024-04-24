<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // yo agrego el fillable
    use HasFactory;
    protected $fillable = ['isbn', 'title', 'date_pub'];
}
