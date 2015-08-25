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

You can find template files for the model, view, and controller parts in /application/template
Copy template.php to controllers/test.php

Open test.php and replace Template in the classname with Test.
Within the controller file, replace all occurences of the name "TemplateModel" with "TestModel"

Finally, find the line
```php
$this->get_view()->render('common/template_view');
```
with
```php
$this->get_view()->render('common/test_view');
```

Copy TemplateModel.php to models/TestModel.php

Replace the classname TemplateModel with TestModel.
This should be all you need to change until you want to start adding DB access methods.a

Copy template_view.php to views/test_view.php

You don't need to replace anything in template_view.php. Just copy it. Later on of course you'll want to actually build the display page here. 


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
