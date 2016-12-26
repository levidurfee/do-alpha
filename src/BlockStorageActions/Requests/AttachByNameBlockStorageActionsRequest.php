<?php

namespace wappr\DigitalOcean\Models\Attach;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Attach\AttachByNameBlockStorageActionsInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class AttachByNameBlockStorageActionsRequest.
 */
class AttachByNameBlockStorageActionsRequest extends RequestModel implements ModelInterface, AttachByNameBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $type = 'attach';

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
     * AttachByNameBlockStorageActionsInterface constructor.
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
