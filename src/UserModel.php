<?php

namespace Joshwhatk\Cent;

use Cartalyst\Sentinel\Users\EloquentUser;
use Joshwhatk\Cent\AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class UserModel extends EloquentUser implements AuthenticatableContract
{
  use Authenticatable;
}