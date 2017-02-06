<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\DeleteBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class DeleteBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
class DeleteBlockStorage extends RequestContract implements DeleteBlockStorageContract
{
    use VolumeId;
}
