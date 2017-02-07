<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

interface CreateMultipleContract extends Requests
{
    public function __construct($names, $region, $size, $image);
}
