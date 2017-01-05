<?php

namespace wappr\DigitalOcean\Contracts\BlockStorageActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveBlockStorageActionsContract.
 */
interface RetrieveBlockStorageActionsContract extends ModelInterface
{
    /**
     * RetrieveBlockStorageActionsContract constructor.
     *
     * @param string $volume_id Required
     * @param int    $action_id Required
     */
    public function __construct(string $volume_id, int $action_id);

    /**
     * @return string
     */
    public function getVolumeId(): string;

    /**
     * @return int
     */
    public function getActionId(): int;
}
