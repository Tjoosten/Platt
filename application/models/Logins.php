<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Logins
 */
class Logins extends Eloquent
{
    /**
     * Database table.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'blocked'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;
}