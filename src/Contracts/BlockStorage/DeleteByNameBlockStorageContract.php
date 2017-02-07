<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface DeleteByNameBlockStorageContract.
 *
 * @property $drive_name
 * @property $region
 */
interface DeleteByNameBlockStorageContract extends Requests
{
    /**
     * DeleteByNameBlockStorage constructor.
     *
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
