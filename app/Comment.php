<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $primaryKey = 'commentid';
	protected $fillable =   [
		'moduleid',
		'userid',
		'comment'
	];
	protected $table = 'comments';
}
