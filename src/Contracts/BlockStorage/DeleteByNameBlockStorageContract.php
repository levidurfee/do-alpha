<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface DeleteByNameBlockStorageContract
 * @property $drive_name
 * @property $region
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface DeleteByNameBlockStorageContract
{
    /**
     * DeleteByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
