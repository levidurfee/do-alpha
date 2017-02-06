<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface CreateBlockStorageContract
 * @property $size_gigabytes
 * @property $name
 * @property $description
 * @property $region
 * @property $snapshot_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface CreateBlockStorageContract extends Requests
{
    /**
     * CreateBlockStorage constructor.
     *
     * @param $size_gigabytes
     * @param $name
     */
    public function __construct($size_gigabytes, $name);

    /**
     * @param mixed $description
     *
     * @return CreateBlockStorage
     */
    public function setDescription($description);

    /**
     * @param mixed $region
     *
     * @return CreateBlockStorage
     */
    public function setRegion($region);

    /**
     * @param mixed $snapshot_id
     *
     * @return CreateBlockStorage
     */
    public function setSnapshotId($snapshot_id);
}
