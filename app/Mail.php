<?php

namespace TMail;

use Jenssegers\Mongodb\Eloquent\Model as Model;

/**
 * Mail
 * The Mail Model
 *
 * @property integer $id
 * @property \Carbon\DateTime $created_at
 * @property \Carbon\DateTime $updated_at
 *
 * @property string $author
 * @property string $recipient
 * @property string $title
 * @property \Carbon\DateTime $read_at
 *
 */

class Mail extends Model
{
    protected $dates = ['read_at'];

    protected $fillable = ['author', 'recipient', 'title', 'content'];
}
