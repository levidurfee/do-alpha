<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\RetrieveBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class RetrieveBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
class RetrieveBlockStorage extends RequestContract implements RetrieveBlockStorageContract
{
    use VolumeId;
}
