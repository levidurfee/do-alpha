# Block Storage

Below are basic examples of interacting with block storage. Each example assumes you are including an autoloader.

## Listing volumes

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\BlockStorageManager;

$client = new Client;
$blockStorage = new BlockStorageManager;
$response = $blockStorage->getAll($client);
var_dump($response->getBody()->getContents());
```

## Creating block storage

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\BlockStorageManager;
use wappr\DigitalOcean\Models\Create\CreateRequest;

$client = new Client;
$blockStorage = new BlockStorageManager;
$newBlockStorage = new CreateRequest(10, 'testing', 'description', 'nyc1');
$response = $blockStorage->create($client, $newBlockStorage);
var_dump($response->getBody()->getContents());
```

[Additional options](create/block-storage.md).

## Retrieving block storage

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\BlockStorageManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveRequest;

$client = new Client;
$blockStorage = new BlockStorageManager;
$retrieveBlockStorage = new RetrieveRequest('long uuid');
$response = $blockStorage->retrieve($client, $retrieveBlockStorage);
var_dump($response->getBody()->getContents());
```

## Deleting block storage

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\BlockStorageManager;
use wappr\DigitalOcean\Models\Delete\DeleteRequest;

$client = new Client;
$blockStorage = new BlockStorageManager;
$deleteBlockStorage = new DeleteRequest('long uuid');
$response = $blockStorage->delete($client, $deleteBlockStorage);
var_dump($response->getStatusCode());
```

## Retrieve by Name

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\BlockStorageManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveByNameRequest;
$blockStorage = new BlockStorageManager;
$response = $blockStorage->retrieveByName(
    new Client,
    new RetrieveByNameRequest('testing', 'nyc1')
);

var_dump($response->getBody()->getContents());
```
