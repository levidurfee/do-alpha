<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface CreateSnapshotBlockStorageContract.
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
