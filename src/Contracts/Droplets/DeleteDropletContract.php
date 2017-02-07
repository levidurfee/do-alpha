<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface DeleteDropletContract.
 *
 * @property $droplet_id
 */
interface DeleteDropletContract extends Requests
{
    /**
     * DeleteDropletContract constructor.
     *
     * @param $droplet_id int
     */
    public function __construct($droplet_id);
}
