<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\VolumeID;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveSnapshotsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveSnapshotsRequest.
 */
class RetrieveSnapshotsRequest extends RequestModel implements ModelInterface, RetrieveSnapshotsInterface
{
    use VolumeID;
}
