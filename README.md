# DigitalOcean API client

[![Build Status](https://travis-ci.org/wappr/digitalocean.svg?branch=master)](https://travis-ci.org/wappr/digitalocean)
[![v0.6.0](https://img.shields.io/badge/version-v0.6.0-orange.svg)](https://packagist.org/packages/wappr/digitalocean)

A [DigitalOcean](https://m.do.co/c/97ced4f9088d) PHP 7 client that uses [Guzzle](https://github.com/guzzle/guzzle) by default.

## Example Usage

### Action Classes

These classes allow you to make more specific requests to the API.

* [Getting Started](docs/getting-started.md)
* [doFactory](docs/factory.md)
* [Droplets](docs/droplets.md)
* [Images](docs/images.md)
* [Account](docs/account.md)
* [Actions](docs/actions.md)
* [Block Storage](docs/block-storage.md)
* [Domains](docs/domains.md)
* [Floating IP Actions](docs/floating-ip-actions.md)
* [Tags](docs/tags.md)

Most of the example usage will display the verbose way of accomplishing each action. If you would like a more
succinct example, see the one below, as some of these actions can be called in one line (excluding the imports).

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Actions;
use wappr\DigitalOcean\Models\Retrieve\RetrieveActionRequest;

var_dump((new Actions)->retrieve(new Client, new RetrieveActionModel(1))->getBody()->getContents());
```

[DigitalOcean API documentation.](https://developers.digitalocean.com/documentation/v2/)

## Todo

* Write units tests for existing actions
* Basic functionality for other actions
* Continue to update docs as I proceed

## Contributing

All contributions are welcome. Please see [contributing guidelines](CONTRIBUTING.md).

## License

Please see the [license](LICENSE).

## Status

Roughly %36.7346938776 done.

Action                  | Total # reqs  | Completed  |
------------------------|--------------:|-----------:|
Account					| 1				| 1			 |
Actions 				| 2				| 2			 |
BlockStorage 			| 7				| 5			 |
BlockStorageActions		| 8				| 2			 |
Domains 				| 4				| 4			 |
DomainRecords 			| 5				| 4			 |
Droplets 				| 13			| 4			 |
DropletActions 			| 18			| 0			 |
FloatingIPs 			| 5				| 0			 |
FloatingIPActions 		| 4				| 4			 |
Images 					| 9				| 4			 |
ImageActions			| 3				| 0			 |
Regions 				| 1				| 1			 |
Sizes 					| 1				| 0			 |
Snapshots 				| 5				| 0			 |
SSHKeys 				| 5				| 0			 |
Tags 					| 7				| 5			 |
**Total**               | **98**		| **36**	 |

*This doesn't take into account the docs, tests, and doFactory.*