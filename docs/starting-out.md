# Starting Out

The API token can either be set by passing an argument to the `Client` construct or by an environment variable. The
recommended way is using an environment variable. The variable name MUST be `DO_API_TOKEN` if using environment
variables.

## Example

### Environment

You're less likely to reveal your API token doing it this way.

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Tags;

$tags = new Tags;
var_dump(
    $tags->create(
        new Client,
        new CreateTagModel('levi')
    )->getBody()->getContents()
);
```

### Client Construct

If you wish to pass the API token to the `Client` construct, here is how you may do that:

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Actions\Tags;

$tags = new Tags;
var_dump(
    $tags->create(
        new Client('abcd1234'),
        new CreateTagModel('levi')
    )->getBody()->getContents()
);
```

## Resources

* [Linux Environment Variables](http://unix.stackexchange.com/questions/117467/how-to-permanently-set-environmental-variables)
* [Docker Environment Variables](https://docs.docker.com/compose/environment-variables/)
* [Travis CI Environment Variables](https://docs.travis-ci.com/user/environment-variables/)
* [Windows Environment Variables](https://msdn.microsoft.com/en-us/library/windows/desktop/ms682653(v=vs.85).aspx)
