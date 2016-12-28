<?php

namespace wappr\DigitalOcean\BlockStorage;

/**
 * Class VolumeID.
 */
trait VolumeID
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
