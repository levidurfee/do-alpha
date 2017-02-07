<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListNeighborsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListNeighbors.
 */
class ListNeighbors extends RequestContract implements ListNeighborsContract
{
    use DropletId;
}
