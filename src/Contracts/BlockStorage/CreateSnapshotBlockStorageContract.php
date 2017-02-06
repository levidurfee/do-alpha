<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface CreateSnapshotBlockStorageContract
 * @property $volume_id
 * @property $name
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface CreateSnapshotBlockStorageContract
{
    /**
     * CreateSnapshotBlockStorageContract constructor.
     *
     * @param $volume_id
     * @param $name
     */
    public function __construct($volume_id, $name);
}
