# DigitalOcean API client

[![Build Status](https://travis-ci.org/wappr/digitalocean.svg?branch=master)](https://travis-ci.org/wappr/digitalocean)
[![v0.6.0](https://img.shields.io/badge/version-v0.7.0-orange.svg)](https://packagist.org/packages/wappr/digitalocean)

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
~~Account~~ 			| 1				| 1			 |
~~Actions~~				| 2				| 2			 |
~~BlockStorage~~		| 8				| 8			 |
~~BlockStorageActions~~	| 7				| 7			 |
~~Domains~~				| 4				| 4			 |
DomainRecords 			| 5				| 4			 |
Droplets 				| 13			| 4			 |
DropletActions 			| 18			| 0			 |
FloatingIPs 			| 5				| 0			 |
~~FloatingIPActions~~	| 4				| 4			 |
Images 					| 9				| 4			 |
ImageActions			| 3				| 0			 |
~~Regions~~				| 1				| 1			 |
Sizes 					| 1				| 0			 |
Snapshots 				| 5				| 0			 |
SSHKeys 				| 5				| 0			 |
Tags 					| 7				| 5			 |
**Total**               | **98**		| **44**	 |

*This does not take into account the docs, tests, and Factory.*