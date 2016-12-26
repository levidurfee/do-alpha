<?php

namespace wappr\DigitalOcean\Models\Remove;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Remove\RemoveBlockStorageActionsInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class RemoveBlockStorageActionsRequest.
 */
class RemoveBlockStorageActionsRequest extends RequestModel implements ModelInterface, RemoveBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $type = 'detach';

    /**
     * @var string
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
     * RemoveBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id
     * @param int    $droplet_id
     * @param string $region
     */
    public function __construct(string $volume_id, int $droplet_id, string $region)
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
