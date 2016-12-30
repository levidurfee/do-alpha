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
use wappr\DigitalOcean\Models\Retrieve\RetrieveBlockStorageBlockStorageRequest;

$domains = new DomainsManager;
var_dump(
    $domains->retrieve(
        new Client,
        new RetrieveBlockStorageBlockStorageRequest('example.com')
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
use wappr\DigitalOcean\Models\Delete\DeleteBlockStorageBlockStorageRequest;

$domains = new DomainsManager;
var_dump(
  $domains->delete(
      new Client,
      new DeleteBlockStorageBlockStorageRequest('example.com')
  )->getStatusCode()
);
```
