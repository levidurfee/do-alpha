<?php

namespace wappr\digitalocean\Contracts\Droplets;

interface CreateContract
{
    public function __construct($name, $region, $size, $image);
}
