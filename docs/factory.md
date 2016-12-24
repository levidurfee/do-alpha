# doFactory

Please make sure you first read the [getting started](getting-started.md) doc before trying anything else.

## Creating

The Create doFactory simplifies the creation of any action. It currently only accepts the required parameters 
for the API to process the request.

### Example Usage

```php
<?php
require_once 'vendor/autoload.php';
use wappr\DigitalOcean\doFactory;
Factory::create('Droplets', ['test', 'nyc2', '512mb', 'ubuntu-16-04-x64']);
```

## List of Supported Actions

* Account
* Actions
* BlockStorageActions
* BlockStorage
* DomainRecords
* Domains
* DropletActions
* Droplets
* FloatingIPActions
* FloatingIPs
* ImageActions
* Images
* Regions
* Sizes
* Snapshots
* SSHKeys
* Tags
