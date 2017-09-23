# Virtual Exposition
Virtual exposition application allows companies to book their place in virtual expositions in different exposition events.

Companies will choose from available events the one they want to take place in, then they will choose their stand within the exposition hall from a map and finally they will receive a report about the users who visited their stand on the event after it is over.

## Installation
You need to run following couple of commands to install dependencies
- composer update
- npm install

## Seed Data
After fresh install and setting up environment using .env file you need to run migrations and seeds
- php artisan migrate
- php artisan db:seed

## Assumptions
Please see the design document for all the assumptions made and missing requirements that are not covered in the specifications.

## Technologies
Following technologies have been used.
- PHP 7
- Laravel 5.5
- AngularJS 1.6
- Twitter Bootstrap 4
- Google Maps API
- SVG
- D3.js
- PHPUnit
- Laravel Dusk
- MySQL Database