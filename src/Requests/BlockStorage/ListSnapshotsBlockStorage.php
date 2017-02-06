<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\ListSnapshotsBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class ListSnapshotsBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
class ListSnapshotsBlockStorage extends RequestContract implements ListSnapshotsBlockStorageContract
{
    /**
     * @var
     */
    public $volume_id;

    /**
     * ListSnapshotsBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
