<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kitar\Dynamodb\Model\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'date', 'body', 'url'];
    protected $primaryKey = 'id';
    protected $table = 'news';
}
