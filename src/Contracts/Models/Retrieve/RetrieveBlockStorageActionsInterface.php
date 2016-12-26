<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

/**
 * Interface RetrieveBlockStorageActionsInterface.
 */
interface RetrieveBlockStorageActionsInterface
{
    /**
     * RetrieveBlockStorageActionsInterface constructor.
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
