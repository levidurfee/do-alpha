<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\DeleteBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class DeleteBlockStorage.
 */
class DeleteBlockStorage extends RequestContract implements DeleteBlockStorageContract
{
    use VolumeId;
}
