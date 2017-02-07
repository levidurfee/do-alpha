<?php

namespace wappr\digitalocean\Requests\BlockStorage;

trait NameRegion
{
    /* required */
    public $drive_name;
    public $region;

    /**
     * DeleteByNameBlockStorage constructor.
     *
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region)
    {
        $this->drive_name = $drive_name;
        $this->region = $region;
    }
}
