[![Build Status](https://travis-ci.org/Soluto/wordpress-plugin-tests-template.svg?branch=master)](https://travis-ci.org/Soluto/wordpress-plugin-tests-template)

# wordpress-plugin-tests-template
Wordpress plugin development is easy, but when it come to testing things can get complicated pretty fast.
Wordpress CLI can generate all that is required to write integration tests for your plugin, with live Wordpress environment.
But to run those tests you need to have PHP and MySql on your machine, which is not always the case.
This sound like really good used case for `docker` and `docker-compose` - we can create the relevant images and run them easily on any machine that has Docker.
This also mean that the same version of PHP and MySql that run on your machine, also run on the CI, and you can easily target various PHP/Wordpress versions.
To learn more about this template in this [blog post](https://blog.solutotlv.com/testing-wordpress-plugins-easy/https://blog.solutotlv.com/userless-mobile-authentication/?utm_source=github)

# Features
* Support hot-reloading

## How to run the tests?
* `docker-compose up --build -d`
* `docker-compose run wordpress vendor/bin/phpunit`

And watch the tests running.
To clean up, run: `docker-compose down`.

Changes in the plugin code or the tests will be hot-reloaded, no need to run _build_ command again.

## How to use this template?
* Fork/Clone this repo
* Replace the plugin code under `src` folder.
* Open `tests\bootstrap.php` and change the plugin name (look for the `TODO`).
* Write some tests under the `tests` folder.
* Add relevant libraries for your tests to the `composer.json` file.
* Don't forget to follow this repo, so you will receive updates.
