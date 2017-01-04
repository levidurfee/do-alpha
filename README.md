# DigitalOcean API client

[![Build Status](https://travis-ci.org/wappr/digitalocean.svg?branch=master)](https://travis-ci.org/wappr/digitalocean)
[![v0.10.0](https://img.shields.io/badge/version-v0.10.0-orange.svg)](https://packagist.org/packages/wappr/digitalocean)

A [DigitalOcean](https://m.do.co/c/97ced4f9088d) PHP 7 client that uses [Guzzle](https://github.com/guzzle/guzzle) by default.

[DigitalOcean API documentation.](https://developers.digitalocean.com/documentation/v2/)

## Todo

* Rewrite docs
* Rewrite `Factory` class
* Utilize traits for repeated data transfer objects (Requests)
* Write units tests for existing actions
* Basic functionality for other actions
* Continue to update docs as I proceed

## Contributing

All contributions are welcome. Please see [contributing guidelines](CONTRIBUTING.md).

## License

Please see the [license](LICENSE).

## Status

Roughly %44.89 done.

Action                  | Total # reqs  | Completed  |
------------------------|--------------:|-----------:|
~~AccountManager~~ 			| 1				| 1			 |
~~ActionsManager~~				| 2				| 2			 |
~~BlockStorageManager~~		| 8				| 8			 |
~~BlockStorageActionsManager~~	| 7				| 7			 |
~~DomainsManager~~				| 4				| 4			 |
DomainRecordsManager 			| 5				| 4			 |
DropletsManager 				| 13			| 4			 |
DropletActionsManager 			| 18			| 0			 |
FloatingIPsManager 			| 5				| 0			 |
~~FloatingIPActionsManager~~	| 4				| 4			 |
ImagesManager 					| 9				| 4			 |
ImageActionsManager			| 3				| 0			 |
~~RegionsManager~~				| 1				| 1			 |
SizesManager 					| 1				| 0			 |
SnapshotsManager 				| 5				| 0			 |
SSHKeysManager 				| 5				| 0			 |
TagsManager 					| 7				| 5			 |
**Total**               | **98**		| **44**	 |

*This does not take into account the docs, tests, and Factory.*