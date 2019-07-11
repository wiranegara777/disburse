# Disburse

Disburse is PHP service project for disburse request. this project developed in PHP 7 and MySQL. 

### Installation

Disburse need PHP 7 and MySQL as database.
if you already have _installed_ PHP and MySQL _without xampp_ follow the instruction below.

* Clone the project and enter to project directory
```sh
$ git clone https://github.com/wiranegara777/disburse.git
$ cd disburse
```
* open DbConfig.php in class directory
```sh
<?php
class DbConfig 
{    
    private $_host = 'localhost';
    private $_username = 'root';  
    private $_password = '';
    private $_database = 'mydata'; #change this to your DB name
```
* migrate and seed the database
```sh
$ php migrate.php
```
if you using _xampp_ follow the instruction below.
* turn on Apache and MySQL service
* move to htdocs folder
```sh
#for linux user
$ cd /opt/lampp/htdocs/
#for windows user
$ cd C:\xamppp\htdocs
```
* clone the project and enter to project directory
```sh
$ git clone https://github.com/wiranegara777/disburse.git
$ cd disburse
```
* open DbConfig.php in class directory
```sh
<?php
class DbConfig 
{    
    private $_host = 'localhost';
    private $_username = 'root';  
    private $_password = '';
    private $_database = 'mydata'; #change this to your DB name
```
* migrate and seed the database
```sh
- open browser and paste the link below
http://localhost/disburse/migrate.php
```

### Features

For disburse request
```sh
- non xampp user
$ php process_disburse.php

- xampp user
- open browser and paste the link below
http://localhost/disburse/process_disburse.php
```
for check request
```sh
- non xampp user
$ php process_check_disburse.php

- xampp user
- open browser and paste the link below
http://localhost/disburse/process_check_disburse.php
```


