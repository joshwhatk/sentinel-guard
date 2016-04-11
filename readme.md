#Cent (An Auth Gaurd Implementation for *stateless* Sentinel) v1.0.1

## Installation

- Extend `UserModel` in your `User` model

    ```
    use Joshwhatk\Cent\UserModel;

    class User extends UserModel
    {
        ...
    ```

- Register the CentServiceProvider in your `config/app.php`

    ```
    Joshwhatk\Cent\CentServiceProvider::class,
    ```

- Change the api driver to `cent` in your `config/auth.php`

    ```
    'guards' => [
        'api' => [
            'driver' => 'cent',
            'provider' => 'users',
        ],
    ],
    ```