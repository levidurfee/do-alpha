<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\BlockStorageActions\ByName;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveByNameBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RemoveBlockStorageActionsByNameRequest.
 */
class RemoveBlockStorageActionsByNameRequest extends RequestModel implements ModelInterface, RemoveByNameBlockStorageActionsContract
{
    use ByName;

    /**
     * @var string
     */
    protected $type = 'detach';
}
