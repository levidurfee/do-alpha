<?php

namespace wappr\digitalocean\Requests;

use wappr\digitalocean\Contracts\DropletActions\TypeHelper;
use wappr\digitalocean\Contracts\RequestContract;

class DropletActions extends RequestContract
{
    public $droplet_id;

    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }

    public function enableBackups(TypeHelper $typeHelper)
    {
        // Send post.
    }
}
