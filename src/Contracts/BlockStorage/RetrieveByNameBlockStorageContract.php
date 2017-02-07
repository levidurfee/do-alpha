<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface RetrieveByNameBlockStorageContract.
 *
 * @property $drive_name
 * @property $region
 */
interface RetrieveByNameBlockStorageContract extends Requests
{
    /**
     * RetrieveByNameBlockStorage constructor.
     *
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
