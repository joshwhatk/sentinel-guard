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

use Illuminate\Contracts\Auth\Guard;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Contracts\Auth\Authenticatable;

class Cent implements Guard
{
    /**
   * Determine if the current user is authenticated.
   *
   * @return bool
   */
  public function check()
  {
      if (Sentinel::check()) {
          return true;
      }

      return false;
  }

  /**
   * Determine if the current user is a guest.
   *
   * @return bool
   */
  public function guest()
  {
      return Sentinel::guest();
  }

  /**
   * Get the currently authenticated user.
   *
   * @return \Illuminate\Contracts\Auth\Authenticatable|null
   */
  public function user()
  {
      return Sentinel::getUser();
  }

  /**
   * Get the ID for the currently authenticated user.
   *
   * @return int|null
   */
  public function id()
  {
      if ($user = Sentinel::check()) {
          return $user->id;
      }

      return null;
  }

  /**
   * Validate a user's credentials.
   *
   * @param  array  $credentials
   * @return bool
   */
  public function validate(array $credentials = [])
  {
      return Sentinel::validForCreation($credentials);
  }

  /**
   * Set the current user.
   *
   * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
   * @return void
   */
  public function setUser(Authenticatable $user)
  {
      Sentinel::login($user);
  }

  /**
   * Alias to set the current user.
   *
   * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
   * @return void
   */
  public function login(Authenticatable $user)
  {
      $this->setUser($user);
  }
}
