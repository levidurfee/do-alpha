<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\VolumeID;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveSnapshotsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveBlockStorageSnapshotsRequest.
 */
class RetrieveBlockStorageSnapshotsRequest extends RequestModel implements ModelInterface, RetrieveSnapshotsContract
{
    use VolumeID;
}
