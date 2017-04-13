# RTR Laravel

This is a learning resource created for developers to get to grips with the Laravel framework. 

## Development machine configuration

### Install Laravel Homestead

Follow the instructions for [installing and configuring Laravel Homestead](https://laravel.com/docs/5.4/homestead)

### Install dependency managers

This project uses [Node.js, NPM](https://nodejs.org/en/) and [Composer](https://getcomposer.org/). Install these 

### Clone 

Clone this repository into your `~/Code` directory

### Install dependencies

Within the project root type:
 
 * `composer install`
 * `npm install`

## Update your hosts file

Append this line to your `/etc/hosts` file

`127.0.0.1       rtr.app`

## Update your Homestead

Create an entry for the RTR application in your `~/.homestead/Homestead.yaml` file:

```yaml
sites:
    - map: rtr.app
      to: /home/vagrant/Code/rtr-laravel/public
```

## Configure application

Run the following commands **from your project root**

* Rename `.env.example` to `.env`
* Run the following commands
  * `composer install`
  * `php artisan key:generate`
  * `php artisan migrate`
  * `php artisan db:seed`

At this point you should be able to visit `http://rtr.app:8000`
