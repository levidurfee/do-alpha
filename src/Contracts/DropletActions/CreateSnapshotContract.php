<?php

namespace wappr\digitalocean\Contracts\DropletActions;
use wappr\digitalocean\Contracts\Requests;

/**
 * Interface CreateSnapshotContract.
 * @property $name
 */
interface CreateSnapshotContract extends Requests
{
    /**
     * @param $name string
     */
    public function setName($name);
}
