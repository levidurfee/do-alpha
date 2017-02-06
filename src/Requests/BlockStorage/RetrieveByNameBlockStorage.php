<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\RetrieveByNameBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

class RetrieveByNameBlockStorage extends RequestContract implements RetrieveByNameBlockStorageContract
{
    use NameRegion;
}
