<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    //connect posts to user_id
    public function user(){
    	return $this->belongsTo('App\Models\User');
    }
}
