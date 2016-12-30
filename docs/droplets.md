# DropletsManager

Below are basic examples of interacting with droplets. Each example assumes you are including an autoloader.

## Listing droplets

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DropletsManager;

$client = new Client();
$droplets = new DropletsManager();
$droplets->getAll($client);
```

## Creating a droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DropletsManager;
use wappr\DigitalOcean\Models\Create\CreateBlockStorageRequest;

$client = new Client();
$droplets = new DropletsManager();
$droplet = new CreateBlockStorageRequest('testing', 'nyc3', '512mb', 'ubuntu-14-04-x64');
$droplets->create($client, $droplet);
```

[Additional options](create/droplets.md).

## Retrieving information on a single droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DropletsManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveBlockStorageRequest;

$client = new Client();
$droplets = new DropletsManager();
$retrieve = new RetrieveBlockStorageRequest(1234);
$response = $droplets->retrieve($client, $retrieve);
```

## Deleting a droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DropletsManager;
use wappr\DigitalOcean\Models\Delete\DeleteBlockStorageRequest;

$client = new Client();
$droplets = new DropletsManager();
$deleteDroplet = new DeleteBlockStorageRequest(1234);
$droplets->delete($client, $deleteDroplet);
```
