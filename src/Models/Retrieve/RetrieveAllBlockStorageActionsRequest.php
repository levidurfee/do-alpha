<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveAllBlockStorageActionsInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class RetrieveAllBlockStorageActionsRequest
 * @package wappr\DigitalOcean\Models\Retrieve
 */
class RetrieveAllBlockStorageActionsRequest extends RequestModel implements ModelInterface, RetrieveAllBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $volume_id;

    /**
     * RetrieveAllBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id
     */
    public function __construct(string $volume_id)
    {
        $this->volume_id = $volume_id;
    }

    /**
     * @return string
     */
    public function getVolumeId(): string
    {
        return $this->volume_id;
    }
}
