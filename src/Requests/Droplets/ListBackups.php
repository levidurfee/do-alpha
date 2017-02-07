<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListBackupsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListBackups.
 */
class ListBackups extends RequestContract implements ListBackupsContract
{
    use DropletId;
}
