# Droplets

Below are basic examples of interacting with droplets. Each example assumes you are including an autoloader.

## Listing droplets

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Droplets;

$client = new Client();
$droplets = new Droplets();
$droplets->getAll($client);
```

## Creating a droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Models\Create\CreateDropletModel;

$client = new Client();
$droplets = new Droplets();
$droplet = new CreateDropletModel('testing', 'nyc3', '512mb', 'ubuntu-14-04-x64');
$droplets->create($client, $droplet);
```

## Retrieving information on a single droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Models\Retrieve\RetrieveDropletModel;

$client = new Client();
$droplets = new Droplets();
$retrieve = new RetrieveDropletModel(1234);
$response = $droplets->retrieve($client, $retrieve);
```

## Deleting a droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Models\Delete\DeleteDropletModel;

$client = new Client();
$droplets = new Droplets();
$deleteDroplet = new DeleteDropletModel(1234);
$droplets->delete($client, $deleteDroplet);
```