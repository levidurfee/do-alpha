<?php

namespace wappr\DigitalOcean\Contracts\Models\Resize;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface ResizeBlockStorageActionsInterface.
 */
interface ResizeBlockStorageActionsInterface extends ModelInterface
{
    /**
     * ResizeBlockStorageActionsInterface constructor.
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
