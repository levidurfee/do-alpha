<?php

namespace wappr\digitalocean\Requests\Droplets;

trait DropletId
{
    public $droplet_id;

    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }
}
