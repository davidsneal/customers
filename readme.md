# Customers

A **Laravel-powered** web application, created purely for demonstration purposes.

![Image](/resources/assets/img/home.png)

## Installation

- Clone this repository: `git clone https://github.com/davidsneal/customers`
- In a terminal/console window, change directory into the new repo you just cloned and run: `composer install`
- If running locally, add `127.0.0.1	customers.local` _(or amend as desired)_ to your hosts file
- Configure your web server with a virtual host that points to the **_public_** directory
- Restart Apache as required
- Create a MySQL database that your web server has access to
- Copy the **_.env.example_** file and name it **_.env_**
- Edit your new **_.env_** file, setting the necessary database connection details
- Run the command: `php artisan migrate`
- Run the command: `php artisan db:seed` if you wish to create 100 random customers
- If the DB seeding is unsuccessful, you may need to run: `composer dump-autoload`
- Visit [http://customers.davidsneal.co.uk/auth/register](http://customers.davidsneal.co.uk/auth/register) and create a new user

## Configuration

The settings file _(/config/settings.php)_ contains an array that controls a couple of parts of the system.

```php
return [
	'home_gravatars' => 60,
	'perpage_admin' => 10
];
```

The number of Gravatars displayed on the homepage defaults to 60, change the value of the array element `home_gravatars` to your liking.

The number of customers displayed per page is taken from the value of the `perpage_admin` array element.

![Image](/resources/assets/img/perpage.png)

## Key files

The main files that control the system are as follows:

- The main Customer Controller - [CustomerController.php](https://github.com/davidsneal/customers/blob/master/app/Http/Controllers/CustomerController.php)
- The Customer edit screen - [edit.blade.php](https://github.com/davidsneal/customers/blob/master/resources/views/customers/edit.blade.php)
- The customers.js file _(handles edit form submissions and homepage modal content population)_ - [customers.js](https://github.com/davidsneal/customers/blob/master/public/js/customers.js)
- The Customer listing screen - [index.blade.php](https://github.com/davidsneal/customers/blob/master/resources/views/customers/index.blade.php)
- The homepage with Gravatars and modals - [welcome.blade.php](https://github.com/davidsneal/customers/blob/master/resources/views/welcome.blade.php)

## Usage

The usage of the customers system is intended to be clear and intuitive, but a few key features are outlined below:

![Image](/resources/assets/img/modal.png)
_Clicking on Gravatars on the homepage will open a modal with extra information_

![Image](/resources/assets/img/search.png)
_Use the search feature on the admin listing screen_

![Image](/resources/assets/img/edit.png)
_You will be notified of any errors in your form before saving any customers_