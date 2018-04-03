<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
	protected $primaryKey = 'userid';
	protected $fillable =   [
		'email',
		'password',
		'accounttype'
	];
	protected $table = 'useraccount';
}
