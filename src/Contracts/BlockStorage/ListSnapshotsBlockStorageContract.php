<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

interface ListSnapshotsBlockStorageContract
{
    /**
     * ListSnapshotsBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
