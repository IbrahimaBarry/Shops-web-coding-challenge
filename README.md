# Shops-web-coding-challenge
This project was created for coding challenge of HiddenFounders

## Getting Started

#### These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

#### You need to have composer, node and npm installed on your machin

##### *MongoDb*

#### Make sure you have the MongoDB PHP driver installed. You can find installation instructions [here](http://php.net/manual/en/mongodb.installation.php).

#### *Warning*: The old mongo PHP driver is not supported anymore in versions >= 3.0.

### Installing

#### After downloading the project, go to its root and run

`composer install`

`npm install`

#### This will install the dependencies

## Database and Migrations

### Database

#### A MongoDB dump with ~300 shops is provided. To import the data, you need to extract the zip file then execute the command below :

`mongorestore --db shops shops/`

#### [Click here to](https://github.com/hiddenfounders/web-coding-challenge/blob/master/dump-shops.zip) download de .zip file

### Migrations

#### And in the end run the following command:

`php artisan migrate`

#### Enjoy :sunglasses: