<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RetrieveBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveBlockStorageActionsRequest.
 */
class RetrieveBlockStorageActionsRequest extends RequestModel implements ModelInterface, RetrieveBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $volume_id;

    /**
     * @var int
     */
    protected $action_id;

    /**
     * RetrieveBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id Required
     * @param int    $action_id Required
     */
    public function __construct(string $volume_id, int $action_id)
    {
        $this->volume_id = $volume_id;
        $this->action_id = $action_id;
    }

    /**
     * @return string
     */
    public function getVolumeId(): string
    {
        return $this->volume_id;
    }

    /**
     * @return int
     */
    public function getActionId(): int
    {
        return $this->action_id;
    }
}
