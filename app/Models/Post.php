<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LakM\Comments\Concerns\Commentable;
use LakM\Comments\Contracts\CommentableContract;


class Post extends Model implements CommentableContract
{
    protected $fillable=[
        'title','description','user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    use Commentable;
}
