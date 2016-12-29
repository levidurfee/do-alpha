# Creating Droplets

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Models\Create\CreateRequest;

$client = new Client();
$droplets = new Droplets();
$droplet = new CreateRequest('testing', 'nyc3', '512mb', 'ubuntu-14-04-x64');
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

Each of these method only accept one parameter.

| Method name           | Type   | Default value  |
| --------------------- | ------ | -------------- |
| setSshKeys            | array  | null           |
| setBackups            | bool   | false          |
| setIpv6               | bool   | false          |
| setPrivateNetworking  | bool   | false          |
| setUserData           | string | null           |
| setVolumes            | array  | null           |
| setTags               | array  | null           |

## Return

You can use `json_decode` on the response from the client and access the properties as shown below.

```php
<?php
// Other stuff happening up here
$response = $droplets->create($client, $droplet);
$json = json_decode($response->getBody()->getContents());
echo $json->droplet->id; // ex. 3164494
```

### Example Json

```json
{
  "droplet": {
    "id": 3164494,
    "name": "example.com",
    "memory": 512,
    "vcpus": 1,
    "disk": 20,
    "locked": true,
    "status": "new",
    "kernel": {
      "id": 2233,
      "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
      "version": "3.13.0-37-generic"
    },
    "created_at": "2014-11-14T16:36:31Z",
    "features": [
      "virtio"
    ],
    "backup_ids": [

    ],
    "snapshot_ids": [

    ],
    "image": {
    },
    "volume_ids": [

    ],
    "size": {
    },
    "size_slug": "512mb",
    "networks": {
    },
    "region": {
    },
    "tags": [
      "web"
    ]
  },
  "links": {
    "actions": [
      {
        "id": 36805096,
        "rel": "create",
        "href": "https://api.digitalocean.com/v2/actions/36805096"
      }
    ]
  }
}
```
