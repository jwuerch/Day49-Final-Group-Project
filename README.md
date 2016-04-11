# Poly Match

#### _Creates a Poly Dating App_

####  Backend: Jason Wuerch
####  Frontend: Tal, Timmi and Hillary

## Description

_This app allows you to create a user profile, user login with sessions, edit information, upload images, delete users, and store all of this information
in a database using mySQL. A search functionality is also found on the homepage._

## Setup/Installation Requirements

* _Clone the Repository_
* _In your terminal, navigate to the project's main folder and run `composer install` to get Silex, Twig, and PHPUnit installed._
* _Type in `apachectl start` to get the apache web server started._
* _type in `mysql.server start` and then `mysql -uroot -proot` to set a username and password._
* _Navigate to the project's web folder using terminal and enter `php -S localhost:8000`_
* _Open PHPMyAdmin by going to localhost:8080/phpmyadmin in your web browser_
* _In phpmyadmin choose the Import tab and choose your database file and click Go. It's important to make sure you're not importing to a database that already exists, so make sure that a database with the same name as the one you're importing doesn't already exist._
* _In your web browser enter localhost:8000 to view the web app._

## Known Bugs

*A lot of the functionality hasn't been finished.
*When you create a new profile and try the search function, the cities won't show. You have to first go to the homepage. This can easily be fixed by having the route for creating a profile include the cities.


## Support and contact details

_Please contact us through GitHub with any questions, comments, or concerns._

## Technologies Used

* _Composer_
* _Twig_
* _Silex_
* _PHPUnit_
* _PHP_
* _mySQL_
* _Apache Server_
* _Bootstrap_

### License

**This software is licensed under the MIT license.**

Copyright (c) 2016 **_Jason Wuerch_**
