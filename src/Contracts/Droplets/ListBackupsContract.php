<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface ListBackupsContract.
 *
 * @property $droplet_id
 */
interface ListBackupsContract extends Requests
{
    /**
     * ListBackupsContract constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id);
}
