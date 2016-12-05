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
     * @param string $drive_id  Required
     * @param int    $action_id Required
     */
    public function __construct(string $drive_id, int $action_id);

    /**
     * @return string
     */
    public function getDriveId(): string;

    /**
     * @return int
     */
    public function getActionId(): int;
}
