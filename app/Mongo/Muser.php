<?php

namespace App\Mongo;

use Moloquent;
class Muser extends Moloquent
{
	protected $table = 'muser';
	protected $primaryKey =  ['_id'];

}
