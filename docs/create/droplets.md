# Creating Droplets

## Creating a droplet

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Models\Create\CreateDropletModel;

$client = new Client();
$droplets = new Droplets();
$droplet = new CreateDropletModel('testing', 'nyc3', '512mb', 'ubuntu-14-04-x64');
$droplets->create($client, $droplet);
```

## Construct requires

* Name
* Region
* Size
* Image

## Additional properties

You can set additional properties when creating new droplets.

* SSH Keys
* Backups
* IPv6
* Private Networking
* User Data
* Volumes
* Tags

## Methods

* `setSshKeys(array $ssh_keys)`
* `setBackups(bool $backups)`
* `setIpv6(bool $ipv6)`
* `setPrivateNetworking(bool $private_networking)`
* `setUserData(string $user_data)`
* `setVolumes(array $volumes)`
* `setTags(array $tags)`
