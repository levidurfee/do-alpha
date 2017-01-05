<?php

namespace wappr\DigitalOcean\Contracts\BlockStorageActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface AttachBlockStorageActionsContract.
 */
interface AttachBlockStorageActionsContract extends ModelInterface
{
    /**
     * AttachBlockStorageActionsContract constructor.
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
