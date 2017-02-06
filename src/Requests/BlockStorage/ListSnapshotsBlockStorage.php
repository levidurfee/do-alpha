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
    use VolumeId;
}
