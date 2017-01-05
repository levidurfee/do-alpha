<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RetrieveAllBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveBlockStorageActionsAllRequest.
 */
class RetrieveBlockStorageActionsAllRequest extends RequestModel implements ModelInterface, RetrieveAllBlockStorageActionsContract
{
    /**
     * @var string
     */
    protected $volume_id;

    /**
     * RetrieveAllBlockStorageActionsContract constructor.
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
