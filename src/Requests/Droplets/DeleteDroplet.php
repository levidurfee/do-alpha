<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\DeleteDropletContract;
use wappr\digitalocean\Contracts\RequestContract;

class DeleteDroplet extends RequestContract implements DeleteDropletContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * DeleteDropletContract constructor.
     *
     * @param $droplet_id int
     */
    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return int
     */
    public function getDropletId()
    {
        return $this->droplet_id;
    }
}
