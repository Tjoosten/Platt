<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Labels extends Eloquent
{
	/**
	 *
	 */ 
	protected $table = 'labels';

	/**
	 * Mass-assign fields. 
	 *
	 * @var array
	 */ 
	protected $fillable = [];
}