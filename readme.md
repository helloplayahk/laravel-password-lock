# Laravel Password Lock

Laravel Password Lock is a middleware for locking the route from the public.

### Usage

Run `composer require playa/laravel-password-lock` and 
add the middleware `\Playa\PasswordLock\PasswordLockMiddleware::class` to your kernel.php.

If you want to lock down the whole site, you can add the middleware to `$middlewareGroups`, or
add the middleware to the specific route you need to lock down. 


### Config

Run `php artisan vendor publish` to get the `playa-password-lock.php` in config folder. Available settings 
is as follow:

* invite_password: the password for unlocking the site
* client_logo: the logo URL to be displayed in login page
* client_logo_width: the logo width
* enable: whether to enable or disable the lockdown
