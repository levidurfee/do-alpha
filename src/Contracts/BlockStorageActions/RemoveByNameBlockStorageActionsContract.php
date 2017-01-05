<?php

namespace wappr\DigitalOcean\Contracts\BlockStorageActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RemoveByNameBlockStorageActionsContract.
 */
interface RemoveByNameBlockStorageActionsContract extends ModelInterface
{
    /**
     * RemoveByNameBlockStorageActionsContract constructor.
     *
     * @param int    $droplet_id
     * @param string $volume_name
     * @param string $region
     */
    public function __construct(int $droplet_id, string $volume_name, string $region);
}
