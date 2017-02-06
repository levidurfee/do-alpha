<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\CreateSnapshotBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

class CreateSnapshotBlockStorage extends RequestContract implements CreateSnapshotBlockStorageContract
{
    /* required */
    public $volume_id;
    public $name;

    /**
     * CreateSnapshotBlockStorage constructor.
     *
     * @param $volume_id
     * @param $name
     */
    public function __construct($volume_id, $name)
    {
        $this->volume_id = $volume_id;
        $this->name = $name;
    }
}
