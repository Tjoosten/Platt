<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Feedback
 *
 * id           INT(11)       AUTO_INCREMENT PRIMARY_KEY.
 * platform_id  VARCHAR(255)
 * heading      VARCHAR(255)
 * description  TEXT
 * status_id    INT(2)
 */
class Tickets extends Eloquent
{
    /**
     * The database table.
     *
     * @var string
     */
    protected $table = 'ci_sessions';

    /**
     * Get the platform information through a relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function platform()
    {
        return $this->belongsTo('Applications');
    }

    /**
     * Get the status information through a relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function labels()
    {
        return $this->belongsToMany('Labels');
    }
}
