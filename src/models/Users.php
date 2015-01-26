<?php namespace Shoulderscms\Shoulderscms\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Users extends \Eloquent {

	use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

}