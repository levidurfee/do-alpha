<?php

namespace wappr\digitalocean\Contracts\DropletActions;

/**
 * Interface CreateSnapshotContract.
 */
interface CreateSnapshotContract
{
    /**
     * @param $name string
     */
    public function setName($name);
}
