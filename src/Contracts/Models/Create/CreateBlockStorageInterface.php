<?php

namespace wappr\DigitalOcean\Contracts\Models\Create;

/**
 * Interface CreateBlockStorageInterface.
 */
interface CreateBlockStorageInterface
{
    /**
     * CreateBlockStorageInterface constructor.
     *
     * @param $size_gigabytes int
     * @param $name string
     * @param $description string
     * @param $region string
     */
    public function __construct(int $size_gigabytes, string $name, string $description, string $region);

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
