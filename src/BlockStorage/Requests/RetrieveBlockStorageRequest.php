<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\VolumeID;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveBlockStorageInterface;

/**
 * Class RetrieveBlockStorageRequest.
 */
class RetrieveBlockStorageRequest extends RequestModel implements ModelInterface, RetrieveBlockStorageInterface
{
    use VolumeID;
}
