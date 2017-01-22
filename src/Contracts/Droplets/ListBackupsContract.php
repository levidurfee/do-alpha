<?php

namespace wappr\digitalocean\Contracts\Droplets;

/**
 * Interface ListBackupsContract.
 */
interface ListBackupsContract
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
