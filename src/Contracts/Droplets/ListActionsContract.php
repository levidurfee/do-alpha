<?php

namespace wappr\digitalocean\Contracts\Droplets;

/**
 * Interface ListActionsContract.
 */
interface ListActionsContract
{
    /**
     * ListActionsContract constructor.
     *
     * @param $droplet_id int
     */
    public function __construct($droplet_id);

    /**
     * @return int
     */
    public function getDropletId();
}
