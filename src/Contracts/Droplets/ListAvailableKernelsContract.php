<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface ListAvailableKernelsContract.
 *
 * @property $droplet_id
 */
interface ListAvailableKernelsContract extends Requests
{
    public function __construct($droplet_id);
}
