<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

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
