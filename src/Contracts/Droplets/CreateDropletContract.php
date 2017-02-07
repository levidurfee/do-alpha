<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

interface CreateDropletContract extends Requests
{
    public function __construct($name, $region, $size, $image);
}
