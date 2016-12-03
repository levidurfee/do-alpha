# Images

Below are basic examples of interacting with images. Each example assumes you are including an autoloader.

## Listing droplets

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Images;

$client = new Client;
$images = new Images;
$response = $images->getAll($client);
$stream = $response->getBody()->getContents();
var_dump($stream);
```

## Retrieving information on a single image

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Images;
use wappr\DigitalOcean\Models\Retrieve\RetrieveImageModel;

$client = new Client;
$images = new Images;
$image = new RetrieveImageModel(1234);
$response = $images->retrieve($client, $image);
$stream = $response->getBody()->getContents();
var_dump($stream);
```

## Updating an image

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Images;
use wappr\DigitalOcean\Models\Update\UpdateImageModel;

$client = new Client;
$images = new Images;
$updateImage = new UpdateImageModel(1234, 'testing rename api');
$response = $images->update($client, $updateImage);
$stream = $response->getBody()->getContents();
var_dump($stream);
```

## Deleting an image

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Images;
use wappr\DigitalOcean\Models\Delete\DeleteImageModel;

$client = new Client;
$images = new Images;
$deleteImage = new DeleteImageModel(1234);
$response = $images->delete($client, $deleteImage);
var_dump($response->getStatusCode()); // Should return 204 when successful
```
