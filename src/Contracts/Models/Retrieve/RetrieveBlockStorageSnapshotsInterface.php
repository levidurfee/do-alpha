<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveBlockStorageSnapshotsInterface.
 */
interface RetrieveBlockStorageSnapshotsInterface extends ModelInterface
{
    /**
     * RetrieveBlockStorageSnapshotsInterface constructor.
     *
     * @param string $volume_id
     */
    public function __construct(string $volume_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
