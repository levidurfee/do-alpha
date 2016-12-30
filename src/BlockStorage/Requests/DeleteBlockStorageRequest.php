<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\VolumeID;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\DeleteBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class DeleteBlockStorageRequest.
 */
class DeleteBlockStorageRequest extends RequestModel implements ModelInterface, DeleteBlockStorageInterface
{
    use VolumeID;
}
