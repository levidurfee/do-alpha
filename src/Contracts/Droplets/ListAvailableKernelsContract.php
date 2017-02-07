<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

interface ListAvailableKernelsContract extends Requests
{
    public function __construct($droplet_id);
    public function getDropletId();
}
