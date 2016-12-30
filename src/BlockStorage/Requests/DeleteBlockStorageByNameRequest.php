<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\ByName;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\DeleteByNameInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class DeleteBlockStorageByNameRequest.
 */
class DeleteBlockStorageByNameRequest extends RequestModel implements ModelInterface, DeleteByNameInterface
{
    use ByName;
}
