<?php

namespace wappr\digitalocean\Contracts\Droplets;

/**
 * Interface DeleteDropletContract.
 */
interface DeleteDropletContract
{
    /**
     * DeleteDropletContract constructor.
     *
     * @param $droplet_id int
     */
    public function __construct($droplet_id);

    /**
     * @return int
     */
    public function getDropletId();
}
