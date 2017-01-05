<?php

namespace wappr\DigitalOcean\Contracts\BlockStorageActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface ResizeBlockStorageActionsContract.
 */
interface ResizeBlockStorageActionsContract extends ModelInterface
{
    /**
     * ResizeBlockStorageActionsContract constructor.
     *
     * @param string $volume_id
     * @param int    $size_gigabytes
     * @param string $region
     */
    public function __construct(string $volume_id, int $size_gigabytes, string $region);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
