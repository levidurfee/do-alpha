<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface ListSnapshotsContract.
 *
 * @property $droplet_id
 */
interface ListSnapshotsContract extends Requests
{
    /**
     * ListSnapshotsContract constructor.
     *
     * @param $droplet_id
     */
    public function __construct($droplet_id);

    /**
     * @return mixed
     */
    public function getDropletId();
}
