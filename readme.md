## Laravel 4 PHP Framework For Google App Engine PHP Runtime

This project is a clone of Laravel 4 with the necessary modifications to enable immediate deployment to GAE using the PHP runtime.  Credit goes to Gilles Mergoil and his blog post: http://blog.neoxia.com/laravel-4-on-google-appengine-for-php/ for the heart of the changes needed.  This project is an implementation of the changes documented by Gilles (with correct.

Note that the project differs from Gilles method in that since he wrote that post, a number of PHP extensions have since been made available on Google App Engine, and hence a few of the workarounds are no longer needed.

This project modifies the standard Laravel project in the following ways:

- app.yaml created (note that this must be updated with your newly created GAE app name - see below)

- bootstrap/start.php updated with an implementation of gethostname()

- php.ini file added enabling calls to php_sapi_name, and php_uname functions

- app/start/global.php updated so error logs are sent to syslog handler (since direct file system writes in GAE are not permitted)

- app/config/session.php updated such that session details are written to memcached rather than stored in flat files

- app/config/cache.php updated such that values are cached in memcached rather than stored in flat files

- bootstrap/compiled.php regenerated

Again, thanks and credit to Gilles for doing the hard work.
NW


## Using This Repo

* Get whitelisted for PHP development with Google App Engine - see https://gaeforphp.appspot.com/register) & install the GAE PHP runtime development bundle - see https://developers.google.com/appengine/docs/php/gettingstarted/installing

* Create a GAE app and note the app name - see https://appengine.google.com/start/createapp?

* Clone this repo & update 

* You should be ready to push changes up to google 

NW

The standard Laravel readme.md follows

## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
