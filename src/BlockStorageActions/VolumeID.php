<?php

namespace wappr\DigitalOcean\BlockStorageActions;

/**
 * Class VolumeID.
 */
trait VolumeID
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $volume_id;

    /**
     * @var int
     */
    protected $droplet_id;

    /**
     * @var string
     */
    protected $region;

    /**
     * VolumeID constructor.
     * @param int $volume_id
     * @param int $droplet_id
     * @param string $region
     */
    public function __construct(int $volume_id, int $droplet_id, string $region)
    {
        $this->volume_id = $volume_id;
        $this->droplet_id = $droplet_id;
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getVolumeId(): string
    {
        return $this->volume_id;
    }
}
