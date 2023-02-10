<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kitar\Dynamodb\Model\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'url'];
    protected $primaryKey = 'id';
    protected $table = 'sites';
}
