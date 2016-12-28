<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveByNameBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RemoveByNameBlockStorageActionsRequest.
 */
class RemoveByNameBlockStorageActionsRequest extends RequestModel implements ModelInterface, RemoveByNameBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $type = 'detach';

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
     * RemoveByNameBlockStorageActionsRequest constructor.
     *
     * @param int    $droplet_id
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
