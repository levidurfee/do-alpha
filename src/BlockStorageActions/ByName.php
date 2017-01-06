<?php

namespace wappr\DigitalOcean\BlockStorageActions;

/**
 * Class ByName.
 */
trait ByName
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $droplet_id;

    /**
     * @var string
     */
    protected $volume_name;

    /**
     * @var string
     */
    protected $region;

    /**
     * ByName constructor.
     * @param int $droplet_id
     * @param string $volume_name
     * @param string $region
     */
    public function __construct(int $droplet_id, string $volume_name, string $region)
    {
        $this->droplet_id = $droplet_id;
        $this->volume_name = $volume_name;
        $this->region = $region;
    }
}
