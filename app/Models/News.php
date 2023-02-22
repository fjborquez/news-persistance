<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kitar\Dynamodb\Model\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'date', 'body', 'url', 'site', 'companies'];
    protected $primaryKey = 'id';
    protected $table = 'news';

    public static function find($id)
    {
        return parent::find([
            'id' => (int)$id
        ]);
    }
}
