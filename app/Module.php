<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $primaryKey = 'moduleid';
	protected $fillable =   [
		'title',
		'description',
		'filepath',
		'uploader',
		'approvedby',
		'genre',
		'status'
	];
	protected $table = 'modules';
}
