<?php

namespace wappr\digitalocean\Contracts\Droplets;

/**
 * Interface ListSnapshotsContract.
 */
interface ListSnapshotsContract
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
