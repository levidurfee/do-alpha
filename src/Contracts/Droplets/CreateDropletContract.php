<?php

namespace wappr\digitalocean\Contracts\Droplets;

interface CreateDropletContract
{
    public function __construct($name, $region, $size, $image);
}
