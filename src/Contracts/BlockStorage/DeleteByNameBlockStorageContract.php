<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface DeleteByNameBlockStorageContract
 * @property $drive_name
 * @property $region
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface DeleteByNameBlockStorageContract extends Requests
{
    /**
     * DeleteByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
