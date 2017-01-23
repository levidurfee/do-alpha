<?php

namespace wappr\digitalocean\Contracts\Droplets;

/**
 * Interface ListNeighborsContract.
 */
interface ListNeighborsContract
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
