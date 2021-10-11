<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public $table = 'posts';
    
    public $primaryKey = 'id';

    public $timestamps = true;

    public $dateFormat = 'Y-m-d h:m:s';

    public $fillable = ['title', 'body'];
}
