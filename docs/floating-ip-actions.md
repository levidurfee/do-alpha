# Floating IP ActionsManager

Below are basic examples of interacting with Floating IP ActionsManager. Each example assumes you are including an autoloader.

## Assign a Floating IP

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\FloatingIPActionsManager;
use wappr\DigitalOcean\Models\Assign\AssignFloatingIPRequest;

$floatingIPsActions = new FloatingIPActionsManager;
$response = $floatingIPsActions->assign(
    new Client,
    new AssignFloatingIPRequest('assign', 11111, '1.1.1.1')      
);
```

The `AssignFloatingIPRequest` class construct requires the Type, Droplet ID, and IP.

## Un-Assign a Floating IP

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\FloatingIPActionsManager;
use wappr\DigitalOcean\Models\UnAssign\UnAssignFloatingIPActionRequest;

$floatingIPsActions = new FloatingIPActionsManager;
$response = $floatingIPsActions->unAssign(
    new Client,
    new UnAssignFloatingIPActionRequest('1.1.1.1')
);
```

## List All ActionsManager for a Floating IP

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\FloatingIPActionsManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveFloatingIPActionsRequest;

$floatingIPsActions = new FloatingIPActionsManager;
$response = $floatingIPsActions->getAll(
    new Client,
    new RetrieveFloatingIPActionsRequest('1.1.1.1')
);
```

## Retrieve an Existing Floating IP Action

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\FloatingIPActionsManager;
use wappr\DigitalOcean\Models\Retrieve\RetrieveFloatingIPActionRequest;

$floatingIPsActions = new FloatingIPActionsManager;
$response = $floatingIPsActions->retrieve(
    new Client,
    new RetrieveFloatingIPActionRequest('1.1.1.1', 11111)
);
```

The `RetrieveFloatingIPActionRequest` construct requires the Floating IP and the Action ID.
