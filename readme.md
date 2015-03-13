# Customers

A **Laravel-powered** web application, created purely for demonstration purposes.

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
- Visit [http://customers.local/auth/register](http://customers.local/auth/register) and create a new user