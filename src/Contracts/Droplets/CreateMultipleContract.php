<?php

namespace wappr\digitalocean\Contracts\Droplets;

interface CreateMultipleContract
{
    public function __construct($names, $region, $size, $image);
}
