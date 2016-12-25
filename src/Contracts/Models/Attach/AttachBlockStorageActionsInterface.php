<?php

namespace wappr\DigitalOcean\Contracts\Models\Attach;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface AttachBlockStorageActionsInterface.
 */
interface AttachBlockStorageActionsInterface extends ModelInterface
{
    /**
     * AttachBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id
     * @param int    $droplet_id
     */
    public function __construct(string $volume_id, int $droplet_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
