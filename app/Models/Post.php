<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    //如果model明子不是post要跟table說
    //protected $table = 'posts';
    //primarykey的id不一樣也要說
    //protected $primarykey = 'post_id';

    protected $data = ['deleted_at'];

    protected $fillable= [
        'title',
        'body'
    ];
}
