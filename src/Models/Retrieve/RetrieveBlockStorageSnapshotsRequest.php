<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageSnapshotsInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class RetrieveBlockStorageSnapshotsRequest.
 */
class RetrieveBlockStorageSnapshotsRequest extends RequestModel implements ModelInterface, RetrieveBlockStorageSnapshotsInterface
{
    /**
     * @var string
     */
    protected $volume_id;

    /**
     * RetrieveBlockStorageSnapshotsInterface constructor.
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
