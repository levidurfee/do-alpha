# Actions

> Actions are records of events that have occurred on the resources in your account. These can be things like rebooting 
a Droplet, or transferring an image to a new region.

Below are basic examples of interacting with actions. Each example assumes you are including an autoloader.

## Listing actions

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Actions;

$client = new Client;
$actions = new Actions;
$response = $actions->getAll($client);
var_dump($response->getBody()->getContents());
```

Need to implement some sort of pagination. For now, it gets the last 500 actions. I'll need a way to allow users
to change this.

## Retrieve an action

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Actions;
use wappr\DigitalOcean\Models\Retrieve\RetrieveAction;

$client = new Client;
$actions = new Actions;
$retrieveAction = new RetrieveAction(1234);
$response = $actions->retrieve($client, $retrieveAction);
var_dump($response->getBody()->getContents());
```

The example above could also be trimmed a couple lines as shown in the example below.

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Actions;
use wappr\DigitalOcean\Models\Retrieve\RetrieveAction;

$actions = new Actions;
$response = $actions->retrieve(new Client, new RetrieveAction(1234));
var_dump($response->getBody()->getContents());
```

Even that could be simplified into one line (excluding the imports).

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Actions;
use wappr\DigitalOcean\Models\Retrieve\RetrieveAction;

var_dump((new Actions)->retrieve(new Client, new RetrieveAction(1234))->getBody()->getContents());
```

Feel free to use the verbose or succinct way of calling the client API.
