<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListActionsContract;
use wappr\digitalocean\Contracts\RequestContract;

class ListActions extends RequestContract implements ListActionsContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * ListActionsContract constructor.
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
