<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\VolumeID;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveInterface;

/**
 * Class RetrieveRequest.
 */
class RetrieveRequest extends RequestModel implements ModelInterface, RetrieveInterface
{
    use VolumeID;
}
