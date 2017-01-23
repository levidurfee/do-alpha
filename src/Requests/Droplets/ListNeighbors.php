<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListNeighborsContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListNeighbors.
 */
class ListNeighbors extends RequestContract implements ListNeighborsContract
{
    /**
     * @var int
     */
    public $droplet_id;

    /**
     * ListNeighborsContract constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return mixed
     */
    public function getDropletId()
    {
        return $this->droplet_id;
    }
}
