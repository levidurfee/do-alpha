<?php

namespace wappr\digitalocean\Contracts\DropletActions;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface BasicContract.
 *
 * @property $type
 */
interface BasicContract extends Requests
{
    public function __construct($type);
}
