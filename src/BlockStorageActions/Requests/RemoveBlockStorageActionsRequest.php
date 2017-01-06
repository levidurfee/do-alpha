<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\BlockStorageActions\VolumeID;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RemoveBlockStorageActionsRequest.
 */
class RemoveBlockStorageActionsRequest extends RequestModel implements ModelInterface, RemoveBlockStorageActionsContract
{
    use VolumeID;

    /**
     * @var string
     */
    protected $type = 'detach';
}
