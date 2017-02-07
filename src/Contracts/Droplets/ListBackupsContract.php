<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

interface ListBackupsContract extends Requests
{
    /**
     * ListBackupsContract constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id);

    /**
     * @return mixed
     */
    public function getDropletId();
}
