# DigitalOcean API client

A [DigitalOcean](https://m.do.co/c/97ced4f9088d) PHP 7 client that uses [Guzzle](https://github.com/guzzle/guzzle).

## Example Usage

### Creating a droplet

```php
<?php

require_once 'vendor/autoload.php';

use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Models\Create\CreateDropletModel;

$client = new Client();
$droplets = new Droplets();
$droplet = new CreateDropletModel('testing', 'nyc3', '512mb', 'ubuntu-14-04-x64');
$droplets->create($client, $droplet);
```
