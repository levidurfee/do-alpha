<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateBlockStorageSnapshotInterface.
 */
interface CreateBlockStorageSnapshotInterface extends ModelInterface
{
    /**
     * CreateBlockStorageSnapshotInterface constructor.
     *
     * @param string $volume_id
     * @param string $name
     */
    public function __construct(string $volume_id, string $name);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
