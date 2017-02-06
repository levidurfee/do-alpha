<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface ListSnapshotsBlockStorageContract
 * @property $volume_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface ListSnapshotsBlockStorageContract extends Requests
{
    /**
     * ListSnapshotsBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
