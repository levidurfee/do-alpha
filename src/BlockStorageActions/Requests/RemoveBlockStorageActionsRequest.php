<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RemoveBlockStorageActionsRequest.
 */
class RemoveBlockStorageActionsRequest extends RequestModel implements ModelInterface, RemoveBlockStorageActionsContract
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
     * RemoveBlockStorageActionsContract constructor.
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
