<?php

namespace wappr\digitalocean\Contracts\DropletActions;

trait DropletIdHelper
{
    public $droplet_id;
    public function __construct($droplet_id) {
        $this->droplet_id = $droplet_id;
    }
}
