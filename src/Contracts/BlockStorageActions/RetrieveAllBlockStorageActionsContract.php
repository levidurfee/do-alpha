<?php

namespace wappr\DigitalOcean\Contracts\BlockStorageActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveAllBlockStorageActionsContract.
 */
interface RetrieveAllBlockStorageActionsContract extends ModelInterface
{
    /**
     * RetrieveAllBlockStorageActionsContract constructor.
     *
     * @param string $volume_id
     */
    public function __construct(string $volume_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
