<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\RetrieveBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class RetrieveBlockStorage.
 */
class RetrieveBlockStorage extends RequestContract implements RetrieveBlockStorageContract
{
    use VolumeId;
}
