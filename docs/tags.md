# DropletsManager

Below are basic examples of interacting with tags. Each example assumes you are including an autoloader.

## Listing tags

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\TagsManager;

$tags = new TagsManager;
var_dump(
    $tags->getAll(new Client)->getBody()->getContents()
);
```

## Creating a tag

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\TagsManager;
use wappr\DigitalOcean\Models\Create\CreateTagRequest;

$tags = new TagsManager;
var_dump(
    $tags->create(
        new Client,
        new CreateTagRequest('tag_your_it')
    )->getBody()->getContents()
);

```

## Deleting a tag

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\TagsManager;
use wappr\DigitalOcean\Models\Delete\DeleteTagRequest;

$tags = new TagsManager;
var_dump(
    $tags->create(
        new Client,
        new DeleteTagRequest('tag_your_it')
    )->getBody()->getContents()
);

```

## Retrieving a tag

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\TagsManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveTagRequest;

$tags = new TagsManager;
var_dump(
    $tags->create(
        new Client,
        new RetrieveTagRequest('tag_your_it')
    )->getBody()->getContents()
);

```

## Updating a tag

First parameter is the old tag name and the second parameter is the new tag name.

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\TagsManager;
use wappr\DigitalOcean\Models\Update\UpdateTagRequest;

$tags = new TagsManager;
var_dump(
    $tags->create(
        new Client,
        new UpdateTagRequest('tag_your_it', 'new_tag')
    )->getBody()->getContents()
);

```
