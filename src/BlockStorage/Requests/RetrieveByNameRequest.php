<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\BlockStorage\ByName;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveByNameInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveByNameRequest.
 */
class RetrieveByNameRequest extends RequestModel implements ModelInterface, RetrieveByNameInterface
{
    use ByName;
}
