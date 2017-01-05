<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\RemoveByNameBlockStorageActionsContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RemoveBlockStorageActionsByNameRequest.
 */
class RemoveBlockStorageActionsByNameRequest extends RequestModel implements ModelInterface, RemoveByNameBlockStorageActionsContract
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
     * RemoveBlockStorageActionsByNameRequest constructor.
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
