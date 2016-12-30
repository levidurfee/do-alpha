<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\CreateSnapshotInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

class CreateBlockStorageSnapshotRequest extends RequestModel implements ModelInterface, CreateSnapshotInterface
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
     * CreateSnapshotInterface constructor.
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
