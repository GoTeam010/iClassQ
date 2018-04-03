<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
	protected $primaryKey = 'bookmarkid';
	protected $fillable =   [
		'userid',
		'moduleid'
	];
	protected $table = 'bookmarks';
}
