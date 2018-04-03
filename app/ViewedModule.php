<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewedModule extends Model
{
	protected $primaryKey = 'viewid';
	protected $fillable =   [
		'userid',
		'moduleid'
	];
	protected $table = 'viewed_module';
}
