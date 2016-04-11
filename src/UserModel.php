<?php

namespace Joshwhatk\Cent;

/**
 * Part of the Cent package.
 *
 * @package    Cent
 * @version    1.0.1
 * @author     joshwhatk
 * @license    MIT
 * @link       http://jwk.me
 */

use Cartalyst\Sentinel\Users\EloquentUser;
use Joshwhatk\Cent\AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class UserModel extends EloquentUser implements AuthenticatableContract
{
    use Authenticatable;
}
