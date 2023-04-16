<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'categories_id',
        'status'
    ];
    function User(){
        return $this->belongsTo(User::class,'user_id');
    }
}
