<?php

namespace wappr\DigitalOcean\Contracts\Models\Remove;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RemoveByNameBlockStorageActionsInterface.
 */
interface RemoveByNameBlockStorageActionsInterface extends ModelInterface
{
    /**
     * RemoveByNameBlockStorageActionsInterface constructor.
     *
     * @param int    $droplet_id
     * @param string $volume_name
     * @param string $region
     */
    public function __construct(int $droplet_id, string $volume_name, string $region);
}
