<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	// Table name (uses database name as default
	protected $table = 'posts';
	// Primary key
	public $primaryKey = 'id';
	// Timestamps, true by default
	public $timestamps = TRUE;
}
