<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface RetrieveBlockStorageContract
 * @property $volume_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface RetrieveBlockStorageContract
{
    /**
     * RetrieveBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
