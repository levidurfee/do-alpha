<?php

namespace wappr\digitalocean\Contracts\Droplets;

interface ListAvailableKernelsContract
{
    public function __construct($droplet_id);
    public function getDropletId();
}
