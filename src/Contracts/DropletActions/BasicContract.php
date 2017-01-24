<?php

namespace wappr\digitalocean\Contracts\DropletActions;

interface BasicContract
{
    public function __construct($type, $droplet_id);
}
