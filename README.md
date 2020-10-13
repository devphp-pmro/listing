#data listing in tag select field, without formatting

To install the library, run the following command:

``` sh
composer require devphp-pmro/listing
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<?php

open the Config.php file in the source folder and enter the credentials for connecting to the database

//define the connection settings to the database for backup

define("CONFIG",["host" => "host,
                "data_base" => "data_base",
                "user" => "user",
                "password" => "password",
                );

default port 3306


require __DIR__. '/vendor-dir/autoload.php';

use Source\_App\Listing;

$selectAll = (new Listing())->selectAll("table","optionValue","visible");

$orderBy = (new Listing())->orderBy("table","optionValue","visible","order","desc"); // type is optional (asc or desc)

$groupBy = (new Listing())->groupBy("table","optionValue","visible","groupBy"); // type is optional (asc or desc)

$groupOrderBy = (new Listing())->groupOrderBy("table","optionValue","visible","orderBy","groupBy","type"); // type is optional (asc or desc)

```

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>

License
----
MIT

