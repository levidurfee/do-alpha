# Droplets

Below are basic examples of interacting with tags. Each example assumes you are including an autoloader.

## Listing tags

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Tags;

$tags = new Tags;
var_dump(
    $tags->getAll(new Client)->getBody()->getContents()
);
```

## Creating a tag

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Tags;
use wappr\DigitalOcean\Models\Create\CreateTagRequest;

$tags = new Tags;
var_dump(
    $tags->create(
        new Client,
        new CreateTagRequest('tag_your_it')
    )->getBody()->getContents()
);

```
