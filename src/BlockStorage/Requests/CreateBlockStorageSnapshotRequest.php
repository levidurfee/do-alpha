<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\CreateBlockStorageSnapshotInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

class CreateBlockStorageSnapshotRequest extends RequestModel implements ModelInterface, CreateBlockStorageSnapshotInterface
{
    /**
     * @var string
     */
    protected $volume_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * CreateBlockStorageSnapshotInterface constructor.
     *
     * @param string $volume_id
     * @param string $name
     */
    public function __construct(string $volume_id, string $name)
    {
        $this->volume_id = $volume_id;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getVolumeId(): string
    {
        return $this->volume_id;
    }
}
