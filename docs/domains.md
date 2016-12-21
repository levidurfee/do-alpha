# Domains

Below are basic examples of interacting with domains. Each example assumes you are including an autoloader.

## Create

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Domains;
use wappr\DigitalOcean\Models\Create\CreateDomainRequest;

$domains = new Domains;
var_dump(
    $domains->create(
        new Client,
        new CreateDomainRequest('example.com', '127.0.0.1')
    )->getBody()->getContents()
);
```

## Retrieve

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Domains;
use wappr\DigitalOcean\Models\Retrieve\RetrieveDomainRequest;

$domains = new Domains;
var_dump(
    $domains->retrieve(
        new Client,
        new RetrieveDomainRequest('example.com')
    )->getBody()->getContents()
);
```

## List

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Domains;

$domains = new Domains;
var_dump($domains->getAll(new Client)->getBody()->getContents());
```

## Delete

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Domains;
use wappr\DigitalOcean\Models\Delete\DeleteDomainRequest;

$domains = new Domains;
var_dump(
  $domains->delete(
      new Client,
      new DeleteDomainRequest('example.com')
  )->getStatusCode()
);
```
