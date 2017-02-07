<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface ListNeighborsContract.
 *
 * @property $droplet_id
 */
interface ListNeighborsContract extends Requests
{
    /**
     * ListNeighborsContract constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id);

    /**
     * @return mixed
     */
    public function getDropletId();
}
