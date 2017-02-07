<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListAvailableKernelsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListAvailableKernels.
 */
class ListAvailableKernels extends RequestContract implements ListAvailableKernelsContract
{
    use DropletId;
}
