<?php

namespace wappr\DigitalOcean\Contracts\BlockStorage;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateSnapshotContract.
 */
interface CreateSnapshotContract extends ModelInterface
{
    /**
     * CreateSnapshotContract constructor.
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
