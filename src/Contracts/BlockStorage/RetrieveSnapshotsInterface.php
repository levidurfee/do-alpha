<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveSnapshotsInterface.
 */
interface RetrieveSnapshotsInterface extends ModelInterface
{
    /**
     * RetrieveSnapshotsInterface constructor.
     *
     * @param string $volume_id
     */
    public function __construct(string $volume_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
