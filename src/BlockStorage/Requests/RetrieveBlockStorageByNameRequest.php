<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\ByName;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveByNameContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveBlockStorageByNameRequest.
 */
class RetrieveBlockStorageByNameRequest extends RequestModel implements ModelInterface, RetrieveByNameContract
{
    use ByName;
}
