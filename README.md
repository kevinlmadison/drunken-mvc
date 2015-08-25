# Drunken MVC (Model View Controller)
## Introduction
Drunken MVC is a model view controller coded mostly in PHP. It was designed with the bare minimum in mind; only what does an MVC -need-, with a few exceptions. 

By default, the MySQLi database class by Josh Campbell is included. 
[PHP-MySQLi-Database-Class](http://github.com/joshcam/PHP-MySQLi-Database-Class ).

This file can be found in /core/sql.php

## Use
Clone this repo into where you wish to deploy it. This application requires mod_rewrite to be used on your webserver in order to properly work.

### Creating a new page
In order to create a new page, 3 files need to be created. For this example, we will create the page at www.example.com/test

+ /applications/controllers/test.php
+ /applications/models/TestModel.php
+ /applications/views/test_view.php

This can be automated by using an included script generate.pl in the applications folder.
**Make sure this file isn't deployed when you go live.**

Running generate.pl will automatically create these files based on templates. These templates will work off the bat, however, you won't see much since you'll need to setup what data to retrieve from your database.

## Feature List

+ Create some features

## TODO List

## Copyright
Liscense: The MIT License (MIT)

Copyright (c) 2015 Daniel Madison

This software is all open source. If you paid for this, you got ripped off. I hold no responsibility in either case and you can see [LICENSE](LISCENSE) for more information.

Read file [LICENSE](LICENSE) for more information.

## Authors && Contributors
Daniel R. Madison - madisodr@email.sc.edu

## With thanks to
+ Josh Campbell for the MySQLi Database Class
