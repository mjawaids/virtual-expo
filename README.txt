# Virtual Exposition
Virtual exposition application will allow companies to book their place in virtual expositions in different exposition events.
Companies will choose from available events the one they want to take place in, then they will choose their stand within the exposition hall from a map and finally they will receive a report about the users who visited their stand on the event after it is over.

## Instructions to install and configure any pre-requisites and dependencies to prepare the development environment
You need to run following couple of commands to install dependencies
- composer update
- npm install

## Instructions to create and initialize the databases (if any)
After fresh install and setting up environment using .env file you need to run migrations and seeds
- php artisan migrate
- php artisan db:seed

## Instructions to configure and prepare the source code to build and run properly
Just install the dependencies mentioned above and run the migration and seeders.

## Any assumptions made and missing requirements that are not covered in the specifications
Please see the design document.

## Any issues faced and any constructive feedback you may wish to give about improving the assignment
Assignment was good. Just that with Laravel community has adopted Vue.js while there wasn't choice of Vue.js and there were only choices on Angular, React, and Backbone. Also, see the design document for assumptions made.