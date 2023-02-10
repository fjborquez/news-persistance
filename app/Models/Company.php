<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kitar\Dynamodb\Model\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'date', 'title', 'url', 'body'];
    protected $primaryKey = 'id';
}
