<?php

namespace wappr\DigitalOcean\Contracts\BlockStorageActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RemoveBlockStorageActionsContract.
 */
interface RemoveBlockStorageActionsContract extends ModelInterface
{
    /**
     * RemoveBlockStorageActionsContract constructor.
     *
     * @param string $volume_id
     * @param int    $droplet_id
     * @param string $region
     */
    public function __construct(string $volume_id, int $droplet_id, string $region);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
