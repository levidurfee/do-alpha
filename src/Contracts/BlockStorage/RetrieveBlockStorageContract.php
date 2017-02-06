<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface RetrieveBlockStorageContract
 * @property $volume_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface RetrieveBlockStorageContract extends Requests
{
    /**
     * RetrieveBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
