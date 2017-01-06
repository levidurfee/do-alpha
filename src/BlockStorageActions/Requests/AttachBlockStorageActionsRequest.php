<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\BlockStorageActions\VolumeID;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\AttachBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class AttachBlockStorageActionsRequest.
 */
class AttachBlockStorageActionsRequest extends RequestModel implements ModelInterface, AttachBlockStorageActionsContract
{
    use VolumeID;

    /**
     * @var string
     */
    protected $type = 'attach';
}
