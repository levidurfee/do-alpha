# ImagesManager

Below are basic examples of interacting with images. Each example assumes you are including an autoloader.

## Listing droplets

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\ImagesManager;

$client = new Client;
$images = new ImagesManager;
$response = $images->getAll($client);
$stream = $response->getBody()->getContents();
var_dump($stream);
```

## Retrieving information on a single image

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\ImagesManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveImageRequest;

$client = new Client;
$images = new ImagesManager;
$image = new RetrieveImageRequest(1234);
$response = $images->retrieve($client, $image);
$stream = $response->getBody()->getContents();
var_dump($stream);
```

## Updating an image

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\ImagesManager;
use wappr\DigitalOcean\Models\Update\UpdateImageRequests;

$client = new Client;
$images = new ImagesManager;
$updateImage = new UpdateImageRequests(1234, 'testing rename api');
$response = $images->update($client, $updateImage);
$stream = $response->getBody()->getContents();
var_dump($stream);
```

## Deleting an image

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\ImagesManager;
use wappr\DigitalOcean\Models\Delete\DeleteImageRequest;

$client = new Client;
$images = new ImagesManager;
$deleteImage = new DeleteImageRequest(1234);
$response = $images->delete($client, $deleteImage);
var_dump($response->getStatusCode()); // Should return 204 when successful
```
