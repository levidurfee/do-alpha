<?php

namespace wappr\DigitalOcean\Contracts\Models\Create;

interface CreateBlockStorageInterface
{
    /**
     * BlockStorage constructor.
     *
     * @param int    $size_gigabytes
     * @param string $name
     */
    public function __construct($size_gigabytes, $name);

    /**
     * @param string $description
     */
    public function setDescription(string $description);

    /**
     * @param string $region
     */
    public function setRegion(string $region);

    /**
     * @param string $snapshot_id
     */
    public function setSnapshotId(string $snapshot_id);
}
