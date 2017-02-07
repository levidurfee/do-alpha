<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\DeleteByNameBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class DeleteByNameBlockStorage.
 */
class DeleteByNameBlockStorage extends RequestContract implements DeleteByNameBlockStorageContract
{
    use NameRegion;
}
