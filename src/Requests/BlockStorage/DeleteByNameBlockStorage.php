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
    /* required */
    public $drive_name;
    public $region;

    /**
     * DeleteByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region)
    {
        $this->drive_name = $drive_name;
        $this->region = $region;
    }
}
