<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageActionsInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class RetrieveBlockStorageActionsRequest.
 */
class RetrieveBlockStorageActionsRequest extends RequestModel implements ModelInterface, RetrieveBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $drive_id;

    /**
     * @var int
     */
    protected $action_id;

    /**
     * RetrieveBlockStorageActionsInterface constructor.
     *
     * @param string $drive_id  Required
     * @param int    $action_id Required
     */
    public function __construct(string $drive_id, int $action_id)
    {
        $this->drive_id = $drive_id;
        $this->action_id = $action_id;
    }

    /**
     * @return string
     */
    public function getDriveId(): string
    {
        return $this->drive_id;
    }

    /**
     * @return int
     */
    public function getActionId(): int
    {
        return $this->action_id;
    }
}
