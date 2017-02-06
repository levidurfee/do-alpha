<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface ListSnapshotsBlockStorageContract
 * @property $volume_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface ListSnapshotsBlockStorageContract
{
    /**
     * ListSnapshotsBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
