<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\AttachBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class AttachBlockStorageActionsRequest.
 */
class AttachBlockStorageActionsRequest extends RequestModel implements ModelInterface, AttachBlockStorageActionsInterface
{
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
    protected $type = 'attach';

    /**
     * AttachBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id
     * @param int    $droplet_id
     */
    public function __construct(string $volume_id, int $droplet_id)
    {
        $this->volume_id = $volume_id;
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return string
     */
    public function getVolumeId(): string
    {
        return $this->volume_id;
    }
}
