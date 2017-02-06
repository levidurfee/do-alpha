<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\RequestContract;
use wappr\digitalocean\Contracts\BlockStorage\CreateBlockStorageContract;
use wappr\digitalocean\Contracts\Requests;

/**
 * Class CreateBlockStorage.
 */
class CreateBlockStorage extends RequestContract implements CreateBlockStorageContract, Requests
{
    /* Required */
    public $size_gigabytes;
    public $name;

    /* Optional */
    public $description;
    public $region;
    public $snapshot_id;

    /**
     * CreateBlockStorage constructor.
     *
     * @param $size_gigabytes
     * @param $name
     */
    public function __construct($size_gigabytes, $name)
    {
        $this->size_gigabytes = $size_gigabytes;
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $description
     *
     * @return CreateBlockStorage
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param mixed $region
     *
     * @return CreateBlockStorage
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param mixed $snapshot_id
     *
     * @return CreateBlockStorage
     */
    public function setSnapshotId($snapshot_id)
    {
        $this->snapshot_id = $snapshot_id;

        return $this;
    }
}
