<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface RetrieveByNameBlockStorageContract
 * @property $drive_name
 * @property $region
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface RetrieveByNameBlockStorageContract
{
    /**
     * RetrieveByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
