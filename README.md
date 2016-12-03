# DigitalOcean API client

A [DigitalOcean](https://m.do.co/c/97ced4f9088d) PHP 7 client that uses [Guzzle](https://github.com/guzzle/guzzle).

## Example Usage

* [Droplets](docs/droplets.md)
* [Images](docs/images.md)
* [Account](docs/account.md)
* [Actions](docs/actions.md)

Most of the example usage will display the verbose way of accomplishing each action. If you would like a more
succinct example, see the one below, as some of these actions can be called in one line (excluding the imports).

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Actions;
use wappr\DigitalOcean\Models\Retrieve\RetrieveActionModel;

var_dump((new Actions)->retrieve(new Client, new RetrieveActionModel(1234))->getBody()->getContents());
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
