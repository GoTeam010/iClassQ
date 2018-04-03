<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountInfo extends Model
{
	protected $primaryKey = 'userid';
	protected $fillable =   [
		'firstname',
		'middlename',
		'lastname',
		'gender',
		'birthday',
		'mobilenumber'
	];
	protected $table = 'accountinfo';
}
