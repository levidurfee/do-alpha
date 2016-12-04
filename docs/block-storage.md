# Block Storage

Below are basic examples of interacting with block storage. Each example assumes you are including an autoloader.

## Listing volumes

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\BlockStorage;
$client = new Client;
$blockStorage = new BlockStorage;
$response = $blockStorage->getAll($client);
var_dump($response->getBody()->getContents());
```

## Creating block storage

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\BlockStorage;
use wappr\DigitalOcean\Models\Create\CreateBlockStorageModel;
$client = new Client;
$blockStorage = new BlockStorage;
$newBlockStorage = new CreateBlockStorageModel(10, 'testing', 'description', 'nyc1');
$response = $blockStorage->create($client, $newBlockStorage);
var_dump($response->getBody()->getContents());
```

[Additional options](properties/block-storage.md).

## Retrieving block storage

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\BlockStorage;
use wappr\DigitalOcean\Models\Retrieve\RetrieveBlockStorageModel;
$client = new Client;
$blockStorage = new BlockStorage;
$retrieveBlockStorage = new RetrieveBlockStorageModel('long uuid');
$response = $blockStorage->retrieve($client, $retrieveBlockStorage);
var_dump($response->getBody()->getContents());
```

## Deleting block storage

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\BlockStorage;
use wappr\DigitalOcean\Models\Delete\DeleteBlockStorageModel;
$client = new Client;
$blockStorage = new BlockStorage;
$deleteBlockStorage = new DeleteBlockStorageModel('long uuid');
$response = $blockStorage->delete($client, $deleteBlockStorage);
var_dump($response->getStatusCode());
```