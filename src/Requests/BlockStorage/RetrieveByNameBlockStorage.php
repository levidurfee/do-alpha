<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\RetrieveByNameBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

class RetrieveByNameBlockStorage extends RequestContract implements RetrieveByNameBlockStorageContract
{
    /**
     * Required
     *
     * @var
     */
    public $drive_name;

    /**
     * Required
     *
     * @var
     */
    public $region;

    /**
     * RetrieveByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region)
    {
        $this->drive_name = $drive_name;
        $this->region = $region;
    }
}
