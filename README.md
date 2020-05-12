# Laravel starter kit -ca

This is my personal starter kit for laravel 7.x+ in catalan

## Features

### Laravel
* Bulma frontend presets (https://github.com/laravel-frontend-presets/bulma)
* Laravel scout (https://laravel.com/docs/7.x/scout)
* laravel scout mysql driver (https://packagist.org/packages/yab/laravel-scout-mysql-driver)
* Laravel localization (https://github.com/mcamara/laravel-localization)
* Laravel cookie consent (https://github.com/spatie/laravel-cookie-consent)

[//]: # (// TODO: add the rest of the packages)

### Node
* Bulma (https://bulma.io/)
* Lang.js (https://github.com/rmariuzzo/Lang.js)
* pusher-js (https://github.com/pusher/pusher-js)

## Installation

* git clone
* run `composer install`
* run `npm install`
* run `npm run dev`
* Create the .env file by copying and renaming .env.example, which already includes some extra configurations values.
* run `php artisan key:generate`
* run `php artisan migrate`

## Optional configurations and usage

### Scout
If you want to use scout searches, add laravel scout trait to any model you would like to make searchable (https://laravel.com/docs/5.8/scout#installation)

### Localization
Comment out any languages you want to localize the website to on config/laravellocalization.php

More on how to use laravel localization on https://github.com/mcamara/laravel-localization#usage

### Cookie consent
Usage: https://github.com/spatie/laravel-cookie-consent#usage

### Captcha
Usage and config on https://packagist.org/packages/mews/captcha
