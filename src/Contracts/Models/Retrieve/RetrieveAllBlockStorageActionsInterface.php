<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveAllBlockStorageActionsInterface
 * @package wappr\DigitalOcean\Contracts\Models\Retrieve
 */
interface RetrieveAllBlockStorageActionsInterface extends ModelInterface
{
    /**
     * RetrieveAllBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id
     */
    public function __construct(string $volume_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;
}
