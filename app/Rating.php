<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $primaryKey = 'ratingid';
	protected $fillable =   [
		'moduleid',
		'userid'
	];
	protected $table = 'ratings';
}
