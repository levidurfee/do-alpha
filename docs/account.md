# AccountManager

Below is the example usage of getting account information. It assumes you are including an autoloader.

```php
<?php
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\ActionsManager\AccountManager;

$client = new Client;
$account = new AccountManager;
$response = $account->retrieve($client);
var_dump($response->getBody()->getContents());
```
