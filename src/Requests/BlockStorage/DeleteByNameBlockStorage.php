<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\DeleteByNameBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class DeleteByNameBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
class DeleteByNameBlockStorage extends RequestContract implements DeleteByNameBlockStorageContract
{
    use NameRegion;
}
