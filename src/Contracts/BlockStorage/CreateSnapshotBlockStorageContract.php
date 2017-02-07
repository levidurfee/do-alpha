<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface CreateSnapshotBlockStorageContract.
 *
 * @property $volume_id
 * @property $name
 */
interface CreateSnapshotBlockStorageContract extends Requests
{
    /**
     * CreateSnapshotBlockStorageContract constructor.
     *
     * @param $volume_id
     * @param $name
     */
    public function __construct($volume_id, $name);
}
