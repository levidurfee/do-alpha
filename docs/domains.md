# DomainsManager

Below are basic examples of interacting with domains. Each example assumes you are including an autoloader.

## Create

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DomainsManager;
use wappr\DigitalOcean\Models\Create\CreateBlockStorageRequest;

$domains = new DomainsManager;
var_dump(
    $domains->create(
        new Client,
        new CreateBlockStorageRequest('example.com', '127.0.0.1')
    )->getBody()->getContents()
);
```

## Retrieve

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DomainsManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveBlockStorageRequest;

$domains = new DomainsManager;
var_dump(
    $domains->retrieve(
        new Client,
        new RetrieveBlockStorageRequest('example.com')
    )->getBody()->getContents()
);
```

## List

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DomainsManager;

$domains = new DomainsManager;
var_dump($domains->getAll(new Client)->getBody()->getContents());
```

## Delete

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\DomainsManager;
use wappr\DigitalOcean\Models\Delete\DeleteBlockStorageRequest;

$domains = new DomainsManager;
var_dump(
  $domains->delete(
      new Client,
      new DeleteBlockStorageRequest('example.com')
  )->getStatusCode()
);
```
